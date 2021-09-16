<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //classe dos controllers do 'institucional" do site
    class institucional extends CI_Controller {

        //Função para atualizar o cache a cada uma hora
        public function __construct() {
		    parent::__construct();
		    $this->output->cache(60);
        }

        //Controller que leva o usuário ao que seria a index do site, a página home.
        public function index() {
            $this->load->view('home');
        }

        //leva o usuário a página sobre nós
        public function sobre_nos() {
            $this->load->view('sobre_nos');
        }

        //leva o usuário a página de especialidades
        public function especialidades() {
            $this->load->view('especialidades');
        }

        //leva o usuário a página do corpo clínico
        public function corpo_clinico() {
            $this->load->view('corpo_clinico');
        }

        //leva o usuário a página dos convênios
        public function convenios() {
            $this->load->view('convenios');
        }
    }
?>