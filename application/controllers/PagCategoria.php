<?php

class PagCategoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('FrontEndModels/PagInicialModel');
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('FrontEndModels/PagCategoriaModel');
        $this->load->model('FrontEndModels/PagPromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista($id_categoria) {
            $data['menu'] = $this->DepartamentoModel->getAll();
            $data['produto'] = $this->PagInicialModel->getAll();
            $data['promocao'] = $this->PagPromocaoModel->getAll();
            $data['categoria'] = $this->PagCategoriaModel->getAll($id_categoria);
            $this->load->view('FrontEnd/Header');
            $this->load->view('FrontEnd/Menu', $data);
            $this->load->view('FrontEnd/PaginaCategoria', $data);
            //$this->load->view('Footer');
 
    }
}
