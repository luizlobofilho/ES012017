<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function index()
	{
		$data = array('titulo' => 'Cadastro de Aplicações');
		$this->load->view('comum/header',$data);
		

		$this->load->model('home_model');
		$objModel = new home_model();
		$retorno = $objModel->getPessoas();	

		$this->load->view('home', array('retorno'=> $retorno));

		$this->load->view('comum/footer');
	}

}
