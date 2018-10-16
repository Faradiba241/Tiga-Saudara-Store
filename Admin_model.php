<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function admin()
	{
		$post = array();

		$post['nama_lengkap']			= $this->input->post('nama_lengkap');
		$post['username'] 		    	= $this->input->post('username');
		$post['password']		 		= $this->input->post('password');
		
		$this->db->insert('admin', $post);
	}

	public function get_admin()
	{
		$data = $this->db->get('admin')->result_array();
		return $data;
	}
}
//http://localhost/fara_iza/index.php/admin/input_admin