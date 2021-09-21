<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers das paginas do site que tem formulários
    class exame extends CI_Controller {

        public function __construct() {
            parent::__construct(); 
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('Exames_model', 'exame');
       
        }

        public function store() {
            $this->form_validation->set_rules('patientcode', 'Código do paciente:', 'required');
            $this->form_validation->set_rules('date', 'Data do Exame:', 'required');
            $this->form_validation->set_rules('exam_type', 'Tipo de exame:', 'required');
            $this->form_validation->set_rules('observacao', 'Observação:', 'required');
        
            if (!$this->form_validation->run()) {
                $this->session->set_flashdata('errors', validation_errors());
                redirect(base_url('exames'));
            }
            else
            {
            $this->exame->store();
            $this->session->set_flashdata('success', "Saved Successfully!");
            redirect(base_url('exames'));
            }
        
        }
    
    }
?>