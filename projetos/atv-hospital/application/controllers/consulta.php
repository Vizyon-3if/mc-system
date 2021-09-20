<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers das paginas do site que tem formulários
    class consulta extends CI_Controller {

        public function __construct() {
            parent::__construct(); 
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('Consultas_model', 'consulta');
       
        }

        public function store() {
            $this->form_validation->set_rules('code', 'Código do Paciente:', 'required');
            $this->form_validation->set_rules('date', 'Data da Consulta:', 'required');
            $this->form_validation->set_rules('gridRadios1', 'Horário da consulta:', 'required');
            $this->form_validation->set_rules('gridRadios2', 'Consulta administrada por:', 'required');
            $this->form_validation->set_rules('diagnostico', 'Diagnostico', 'required');
            $this->form_validation->set_rules('observacao', 'Observação:', 'required');
        
            if (!$this->form_validation->run())
            {
                $this->session->set_flashdata('errors', validation_errors());
                redirect(base_url('consultas/create'));
            }
            else
            {
            $this->consulta->store();
            $this->session->set_flashdata('success', "Saved Successfully!");
            redirect(base_url('consultas'));
            }
        
        }
    
    }
?>