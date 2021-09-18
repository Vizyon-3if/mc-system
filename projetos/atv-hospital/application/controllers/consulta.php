<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers das paginas do site que tem formulários
    class consulta extends CI_Controller {
        //Carrega o formulário para assim poder fazer a inserção da consulta no banco
        public function create() {
            $var['titulo'] = 'Novo Cadastro';
            $this->load->view('consultas', $var);
	    }

        public function store(){
		//Método que faz a inserção no banco de dados
            $this->load->library('form_validation'); //Library que faz a validação dos formulários
            
            $regras = array(
                    array(
                            'field' => 'nome',
                            'label' => 'Nome',
                            'rules' => 'required'
                    ),
                    array(
                            'field' => 'telefone',
                            'label' => 'telefone',
                            'rules' => 'required'		                
                    ),
                    array(
                            'field' => 'email',
                            'label' => 'E-mail',
                            'rules' => 'required|valid_email'
                    ),
                    array(
                            'field' => 'observacoes',
                            'label' => 'Observações',
                            'rules' => 'required'
                    )
            );
            
            $this->form_validation->set_rules($regras);
    
            if ($this->form_validation->run() == FALSE) {
                $variaveis['titulo'] = 'Novo Registro';
                $this->load->view('v_cadastro', $variaveis);
            } else {
                
                $id = $this->input->post('id');
                
                $dados = array(
                
                    "nome" => $this->input->post('nome'),
                    "telefone" => $this->input->post('telefone'),
                    "email" => $this->input->post('email'),
                    "observacoes" => $this->input->post('observacoes')
                
                );
                if ($this->m_cadastros->store($dados, $id)) {
                    $variaveis['mensagem'] = "Dados gravados com sucesso!";
                    $this->load->view('v_sucesso', $variaveis);
                } else {
                    $variaveis['mensagem'] = "Ocorreu um erro. Por favor, tente novamente.";
                    $this->load->view('errors/html/v_erro', $variaveis);
                }
                    
            }
        }
    }
?>