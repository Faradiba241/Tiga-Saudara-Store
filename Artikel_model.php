<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
	public function artikel()
	{
		$post = array();

		$post['date_time']			= $this->input->post('date_time');
		$post['title'] 		    	= $this->input->post('title');
		$post['description']		= $this->input->post('description');
		$post['image']				= $this->input->post('image');
		$this->db->insert('artikel', $post);
	}

	public function get_artikel()
	{
		$data = $this->db->get('artikel')->result_array();
		return $data;
	}
}
//http://localhost/fara_iza/index.php/artikel/input_artikel