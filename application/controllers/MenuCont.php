<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class MenuCont extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('LoginModel');
        //$this->LoginModel->verificaLogin();
        $this->load->model('BackEndModels/DepartamentoModel');
    }

    public function index() {//método padrão para chamar quando nenhum outro é solicitado
        $this->lista();
    }

    public function lista() {
        $data['menu'] = $this->DepartamentoModel->getAll();
       
        $this->load->view('FrontEnd/Menu', $data);
    }

}
