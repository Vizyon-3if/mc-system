<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers das paginas do site que tem formulários
    class paciente extends CI_Controller {

        public function __construct() {
            parent::__construct(); 
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('Pacientes_model', 'paciente');
        }

        public function store() {
            $this->form_validation->set_rules('name', 'Nome do Paciente:', 'required');
            $this->form_validation->set_rules('birthday', 'Data de Nascimento:', 'required');
            $this->form_validation->set_rules('gridRadios1', 'Sexo:', 'required');
            $this->form_validation->set_rules('rg', 'RG:', 'required');
            $this->form_validation->set_rules('endereco', 'Endereço:', 'required');
            $this->form_validation->set_rules('cep', 'CEP:', 'required');
            $this->form_validation->set_rules('gridRadios2', 'Estado Civil:', 'required');
            $this->form_validation->set_rules('district', 'Nome do bairro:', 'required');
            $this->form_validation->set_rules('gridRadios4', 'Tipo de convênio:', 'required');
        
            if (!$this->form_validation->run()) {
                $this->session->set_flashdata('errors', validation_errors());
                redirect(base_url('pacientes/create'));
            }
            else {
                $this->paciente->store();
                $this->session->set_flashdata('success', "Saved Successfully!");
                redirect(base_url('cadastro_paciente'));
            }
        }
    }
?>