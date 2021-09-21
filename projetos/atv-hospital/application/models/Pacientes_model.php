<?php
    //Criação da Model mdConsultas para as consultas
    if(!defined('BASEPATH')) exit('No direct script acess allowed');
    class Pacientes_model extends CI_Model {
        public function store() {    
            $data = [
                'nm_paciente' => $this->input->post('name'),
                'dt_nascimento' => $this->input->post('birthday'),
                'ic_sexo' => $this->input->post('gridRadios1'),
                'cd_rg' => $this->input->post('rg'),
                'nm_endereco' => $this->input->post('endereco'),
                'cd_cep' => $this->input->post('cep'),
                'cd_bairro' => $this->input->post('district'),
                'cd_convenio' => $this->input->post('gridRadios4'),
                'cd_estado_civil' => $this->input->post('gridRadios2')
            ];
    
            $result = $this->db->insert('paciente', $data);
            return $result;
        }
    }
?>
