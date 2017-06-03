<?php

/**
 * Created by PhpStorm.
 * User: Luiz
 * Date: 31/05/2017
 * Time: 16:35
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem_model extends CI_Model {
    public function getMensagens($idforum){
        $sql = "SELECT dsc_mensagem FROM mensagem WHERE forum_idn_forum ='$idforum' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}


