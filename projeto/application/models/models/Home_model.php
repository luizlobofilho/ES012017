<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getPessoas()
	{
		return $this->db->get('pessoa')->result();
	}
}