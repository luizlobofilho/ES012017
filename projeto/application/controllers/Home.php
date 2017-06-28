<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function index()
	{
		// carrega o cabeçalho da página, bootstrap, javascript e etc...
		$this->load->view('comum/header');
        $this->load->view('comum/menuIni');
		// carrega o modelo com os dados do banco 
		$this->load->model('home_model');
		// cria o objeto que recebe os dados da model 
		$objModel = new home_model();
		// recebe o retorno do método da model 
		$retorno = $objModel->getPessoas();
		

	//	print_r($retorno);

		$this->load->view('home', array('retorno'=> $retorno));

		// carrega o footer da página, por enquanto sem nada 
		$this->load->view('comum/footer');
	}
}
