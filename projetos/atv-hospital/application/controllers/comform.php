<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers das paginas do site que tem formulários
    class comform extends CI_Controller {
        //Função para carregar a library de validação de formulários
        function __construct() {
            parent::__construct();
            $this->load->library(array('form_validation','session'));
        }

        //controller que leva o usuário a página de consultas
        public function consultas() {
            $this->load->view('consultas');
        }

        //controller que leva o usuário a página de contato
        public function contato() {
            $data['formErrors'] = null;  
            //validação dos campos de contato
            $this->form_validation->set_rules('nome', '"Coloque seu nome"', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('email', '"Coloque seu e-mail"', 'trim|required|valid_email');
            $this->form_validation->set_rules('mensagem', '"Escreva aqui sua mensagem"', 'trim|required|min_length[30]');

            //validação para tratamento de erros
            if($this->form_validation->run() == FALSE) {
                $data['formErrors'] = validation_errors();
            }
            else {
                $formData = $this->input->post();
                $emailStatus = $this->SendEmailToAdmin($formData['email'],$formData['nome'],"to@domain.com","To Name",$formData['mensagem'],$formData['email'],$formData['nome']);

                if($emailStatus) {
                    $this->session->set_flashdata('success_msg', 'Contato recebido com sucesso!');
                }
                else {
                    $data['formErrors'] = "Desculpe! Não foi possível enviar o seu contato. tente novamente mais tarde.";
                }
            }

            $this->load->view('contato', $data);
        }

        //Controller para o envio de emails para o admin do site
        private function SendEmailToAdmin($from, $fromName, $to, $toName, $message, $reply = null, $replyName = null, $attach = null) {
            $this->load->library('email');

            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.seudominio.com.br';
            $config['smtp_user'] = 'user@seudominio.com.br';
            $config['smtp_pass'] = 'suasenha';
            $config['newline'] = '\r\n';

            $this->email->initialize($config);

            $this->email->from($from, $fromName);
            $this->email->to($to, $toName);

            if($reply)
            $this->email->reply_to($reply, $replyName);

            if($attach)
            $this->email->attach($attach);

            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send())
            return true;
            else
            return false;
        }

        //controller que leva o usuário a página de consultas
        public function cadastro_paciente() {
            $this->load->view('cadastro_paciente');
        }
    }
?>