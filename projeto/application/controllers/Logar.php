<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar extends CI_Controller {

 
	public function validandoLogin(){
	  
		$this->load->library('session');
		if(empty($this->session->userdata['SESSAO'])){

			$cpf = $this->input->post('nu_cpf');
			$senha = $this->input->post('senha');
			$this->load->model('Logar_model');
			$objModel = new Logar_model();
			$dados_sessao = array(
				'session_id' => md5($cpf),
				'cpf'=> $cpf,
				'logged' => true,
				'login' => $objModel->validaLogin($cpf,$senha),
			);
			$this->session->set_userdata('SESSAO',$dados_sessao);
		}

	

		if(!empty($this->session->userdata['login']))
			$this->index($this->session->userdata['login']);
	

    }
  
	public function index($dados) {

		// carrega o cabeçalho da página, bootstrap, javascript e etc...
		$this->load->view('comum/header');
		$this->load->view('comum/menuLogged');
		// carrega a view de cadastro
		$this->load->view('inicio', array('data'=> $dados));
		// carrega o footer da página, por enquanto sem nada
		$this->load->view('comum/footer');
	}

}
?>
