<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function view()
	{
		$query = $this->db->get('room');
		return $query->result();
	}
	public function detail($id)
	{
		$query = $this->db->get_where('room', 'id='.$id);
		return $query->row_array();
	}
}



 ?>