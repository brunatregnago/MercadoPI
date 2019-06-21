<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Buscar extends CI_Controller{
    
    public function index(){
        $this->load->model('BackEndModels/DepartamentoModel');
        $data['menu'] = $this->DepartamentoModel->getAll();
        $produto =  $this->input->post('buscar');
        $this->load->model('FrontEndModels/PesquisarModel');
        $data['produtos'] =  $this->PesquisarModel->getBuscaByNomeProduto($produto);
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/Menu', $data);
        $this->load->view('FrontEnd/PaginaPesquisar', $data);
    }
}

