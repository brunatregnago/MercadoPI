<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagProdutoEspecifico extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('FrontEndModels/DepartamentoMenuModel');
        $this->load->model('FrontEndModels/PagProdutoEspecificoModel');
        $this->load->model('BackEndModels/ProdutoPromocaoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista($id_produto) {
        $data['produto'] = $this->PagProdutoEspecificoModel->getAll($id_produto);
        $data['produtopromocao'] = $this->ProdutoPromocaoModel->getAll();
        $data['menu'] = $this->DepartamentoMenuModel->getAll();
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu', $data);
        $this->load->view('FrontEnd/PaginaProdutoEspecifico', $data);
        //$this->load->view('FrontEnd/Footer');
        
    }
}
