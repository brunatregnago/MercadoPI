<?php

class PagSubcategoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('FrontEndModels/PagInicialModel');
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('FrontEndModels/PagSubcategoriaModel');
        $this->load->model('FrontEndModels/PagPromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista($id_subcategoria) {
            $data['menu'] = $this->DepartamentoModel->getAll();
            $data['produto'] = $this->PagInicialModel->getAll();
            $data['promocao'] = $this->PagPromocaoModel->getAll();
            $data['subcategoria'] = $this->PagSubcategoriaModel->getAll($id_subcategoria);
            $this->load->view('FrontEnd/Header');
            $this->load->view('FrontEnd/Menu', $data);
            $this->load->view('FrontEnd/PaginaSubcategoria', $data);
            //$this->load->view('Footer');
 
    }
}