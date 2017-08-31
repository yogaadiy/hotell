<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function login($data = array())
	{
		$password = md5($data['password']);
		$login = $this->db->get_where('user', "username = '{$data['username']}' AND password = '{$password}' ", '1');
		return $login;
	}
}


 ?>