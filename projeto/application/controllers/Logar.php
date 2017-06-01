<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar extends CI_Controller {


	public function validandoLogin(){

		$this->load->library('session');
	  
		if(empty($this->input->post('senha')) && empty($this->session->userdata('cpf')))
			$this->logout();

		//if(!empty($this->input->post('senha') || !empty($this->session->userdata('cpf')){
		//	redirect(base_url(''));

		if(empty($this->session->userdata('cpf'))){
			$cpf = $this->input->post('nu_cpf');
			$senha = $this->input->post('senha');
		
			$this->load->model('Logar_model');
			$objModel = new Logar_model();

			$this->session->set_userdata('id',md5($cpf));
			$this->session->set_userdata('login', $objModel->validaLogin($cpf,$senha));
			$this->session->set_userdata('cpf', $cpf);
		}	

		

	

		if(!empty($this->session->userdata('login')))
			$this->index($this->session->userdata('login'));
	

			
    }
     public function logout(){

		$this->load->library('session');

		$this->session->unset_userdata('login');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('cpf');
		$this->session->sess_destroy();
		redirect(base_url(''));
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
