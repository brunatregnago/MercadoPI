<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagInicial extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('FrontEndModels/PagInicialModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        //$data['departamento'] = $this->DepartamentoModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu');
        $this->load->view('FrontEnd/PaginaInicial');
        //$this->load->view('Footer');
    }
}
