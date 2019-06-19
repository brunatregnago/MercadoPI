<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class PagTodosDepartamentos extends CI_Controller{
    
        public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();

        
        $this->load->model('FrontEndModels/TodosDepartamentosModel');
        $this->load->model('BackEndModels/CategoriaModel');
    }

    public function index() {
        $this->lista();
    }
    
    public function lista() {
        $data['categoria'] = $this->CategoriaModel->getAll();
        $data['todosdepartamentos'] = $this->TodosDepartamentosModel->getAll();
        $this->load->view('FrontEnd/Header');
        //$this->load->view('FrontEnd/Menu');
        $this->load->view('FrontEnd/PaginaTodosDepartamentos', $data);
        //$this->load->view('Footer');
    }

}
