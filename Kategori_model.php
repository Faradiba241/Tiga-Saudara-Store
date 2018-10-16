<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	public function kategori()
	{
		$post = array();

		$post['nama_kategori']			= $this->input->post('nama_kategori');
		
		$this->db->insert('kategori', $post);
	}

	public function get_kategori()
	{
		$data = $this->db->get('kategori')->result_array();
		return $data;
	}
}
//http://localhost/fara_iza/index.php/kategori/input_kategori