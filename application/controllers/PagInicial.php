<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagInicial extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        
        $this->load->model('FrontEndModels/PagInicialModel');
        $this->load->model('FrontEndModels/DepartamentoMenuModel');
        $this->load->model('FrontEndModels/PagPromocaoModel');
        $this->load->model('FrontEndModels/DepartamentoInicialModel');
        $this->load->model('FrontEndModels/DepartamentoInicialModelT');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['produto'] = $this->PagInicialModel->getAll();
        $data['promocao'] = $this->PagPromocaoModel->getAll();
        $data['menu'] = $this->DepartamentoMenuModel->getAll();
        $data['departamentoit'] = $this->DepartamentoInicialModelT->getAll();
        $data['departamentoi'] = $this->DepartamentoInicialModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu', $data);
        $this->load->view('FrontEnd/PaginaInicial', $data);
        $this->load->view('FrontEnd/Footer');
    }
}
