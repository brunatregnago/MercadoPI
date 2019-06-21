<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagPromocao extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('FrontEndModels/PagPromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['promocao'] = $this->PagPromocaoModel->getAll();
        $data['menu'] = $this->DepartamentoModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu',$data);
        $this->load->view('FrontEnd/PaginaPromocao', $data);
        //$this->load->view('Footer');
    }
}
