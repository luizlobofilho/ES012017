<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function index()
	{
		// carrega o cabeçalho da página, bootstrap, javascript e etc...
		$this->load->view('comum/header');
		$this->load->model('home_model');
		$objModel = new home_model();
		$retorno = $objModel->getPessoas();	

		$this->load->view('home', array('retorno'=> $retorno));

		// carrega o footer da página, por enquanto sem nada 
		$this->load->view('comum/footer');
	}
}
