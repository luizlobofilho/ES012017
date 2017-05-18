<?php
/**
 * Created by PhpStorm.
 * User: anacpergentino
 * Date: 18/05/17
 * Time: 14:22
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    public function index(){
        // carrega o cabeçalho da página, bootstrap, javascript e etc...
        $this->load->view('comum/header');
        $this->load->view('comum/menuLogged');
        // carrega a view de cadastro
        $this->load->view('forum');//, array('data'=> $dados));
        // carrega o footer da página, por enquanto sem nada
        $this->load->view('comum/footer');
    }

}
?>