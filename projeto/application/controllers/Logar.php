<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar extends CI_Controller {

    public function validandoLogin()
    {
        $cpf = $this->input->post('nu_cpf');
        $senha = $this->input->post('senha');
        $this->load->model('Logar_model');
        $objModel = new Logar_model();
        $login = $objModel->validaLogin($cpf,$senha);
        if(!empty($login)){
            $this->index($login);
        }
    }

    public function index($dados)
    {
        // carrega o cabeçalho da página, bootstrap, javascript e etc...
        $this->load->view('comum/header');
        // carrega a view de cadastro
        $this->load->view('inicio',array('data'=> $dados));
        // carrega o footer da página, por enquanto sem nada
        $this->load->view('comum/footer');
    }


}
?>
