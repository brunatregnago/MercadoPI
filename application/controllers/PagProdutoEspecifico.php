<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagProdutoEspecifico extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        $this->load->model('BackEndModels/ProdutoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['produto'] = $this->ProdutoModel->getAll();
        $this->load->view('FrontEnd/PaginaProdutoEspecifico', $data);
        //$this->load->view('Footer');
    }
}
