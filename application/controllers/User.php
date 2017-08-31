<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->model('room_model');
	}
	public function index()
	{	
		$this->load->view('user/login');
	}
	public function login()
	{
		$data['message'] = '';
		if (!empty($this->input->get))
		 {
			$login = $this->user_model->login($this->input->get);
			if (!empty($login))
			 {
				$data_login = array();
				$data_login['user'] = $login;
				$this->session->set_userdata($data_login);
			}else{
				$data['message'] = "salah doll!!";	
			}
		}
		$this->load->view('room/login', $data);	
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		$this->load->view('user/login');
	}
}


 ?>