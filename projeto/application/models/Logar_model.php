<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar_model extends CI_Model {


    public function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            #echo 'Voce nao tem permissao para entrar nessa pagina. <a href="/projeto">Efetuar Login</a>';
            return false;
		  #die();
        }
	   return true;
	   
    }

    public function validaLogin($cpf,$senha)
    {
        $cpf = str_replace('-','',$cpf);
        $cpf = str_replace('.','',$cpf);
	   
        $sql = "SELECT * FROM pessoa WHERE nu_cpf = '$cpf' AND senha = '$senha'";
        $query = $this->db->query($sql);
	   if($query->result_array() != null || logged()){
		return $query->result_array();
		  
        }else{
		  
            return 0;
        }

    }

    
}
