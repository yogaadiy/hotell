<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('room_model');
	}
	public function index()
	{
		$data['view'] = $this->room_model->view();	
		$this->load->view('room/index', $data);
	}
	public function detail($id)
	{
		$data['detail'] = $this->room_model->detail($id);
		$this->load->view('room/detail', $data);
	}
}


 ?>