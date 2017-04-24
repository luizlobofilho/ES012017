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

    }
}
?>
