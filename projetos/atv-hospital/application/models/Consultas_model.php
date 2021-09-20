<?php
    //Criação da Model mdConsultas para as consultas
    if(!defined('BASEPATH')) exit('No direct script acess allowed');
    class Consultas_model extends CI_Model {
        public function store() {    
            $data = [
                'cd_paciente' => $this->input->post('code'),
                'dt_consulta' => $this->input->post('date'),
                'hr_consulta' => $this->input->post('gridRadios1'),
                'cd_medico' => $this->input->post('gridRadios2'),
                'nm_diagnostico' => $this->input->post('diagnostico'),
                'ds_observacao' => $this->input->post('observacao')
            ];
    
            $result = $this->db->insert('consulta', $data);
            return $result;
        }
    }
?>
