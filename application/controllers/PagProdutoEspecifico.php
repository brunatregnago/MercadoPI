<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagProdutoEspecifico extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('BackEndModels/DepartamentoModel');
        $this->load->model('FrontEndModels/PagProdutoEspecificoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista($id_produto) {
        $data['produto'] = $this->PagProdutoEspecificoModel->getAll($id_produto);
        $data['menu'] = $this->DepartamentoModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu', $data);
        $this->load->view('FrontEnd/PaginaProdutoEspecifico', $data);
        //$this->load->view('Footer');
        
    }
}
