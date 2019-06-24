<?php

class PagDepartamento  extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('FrontEndModels/PagInicialModel');
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('BackEndModels/CategoriaModel');
        $this->load->model('FrontEndModels/PagPromocaoModel');
        $this->load->model('BackEndModels/DepartamentoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['menu'] = $this->DepartamentoModel->getAll();
        $data['produto'] = $this->PagInicialModel->getAll();
        $data['promocao'] = $this->PagPromocaoModel->getAll();
        $data['categoria'] = $this->CategoriaModel->getAll();
        $data['departamento'] = $this->DepartamentoModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu', $data);
        $this->load->view('FrontEnd/PaginaDepartamento', $data);
        //$this->load->view('Footer');
    }
}