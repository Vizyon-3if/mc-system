<?php
    //Criação da Model mdConsultas para as consultas
    if(!defined('BASEPATH')) exit('No direct script acess allowed');
    class Exames_model extends CI_Model {
        public function store() {    
            $data = [
                'cd_paciente' => $this->input->post('pacientcode'),
                'cd_exame' => $this->input->post('exam_type'),
                'dt_exame' => $this->input->post('date'),
                'ds_observacao' => $this->input->post('observacao'),
            ];
    
            $result = $this->db->insert('paciente_exame', $data);
            return $result;
        }
    }
?>
