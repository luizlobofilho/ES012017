<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logar_model extends CI_Model {



    public function validaLogin($cpf,$senha)
    {
        $cpf = str_replace('-','',$cpf);
        $cpf = str_replace('.','',$cpf);
	   $senha = md5($senha);	   

        $sql = "SELECT * FROM pessoa WHERE nu_cpf = '$cpf' AND senha = '$senha'";
        $query = $this->db->query($sql);
	   if($query->result_array() != null){
		return $query->result_array();
		  
        }else{
		redirect(base_url(''));
          return 0;
        }

    }

    
}
