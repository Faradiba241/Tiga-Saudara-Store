<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
	public function barang()
	{
		$post = array();

		$post['nama_barang']			= $this->input->post('nama_barang');
		$post['kategori'] 		    	= $this->input->post('kategori');
		$post['harga_barang']		 	= $this->input->post('harga_barang');
		$post['stok']		 			= $this->input->post('stok');
		$post['status']	 				= $this->input->post('status');
		$post['images']	 				= $this->input->post('images');
		$this->db->insert('barang', $post);
	}

	public function get_barang()
	{
		$data = $this->db->get('barang')->result_array();
		return $data;
	}
}
//http://localhost/fara_iza/index.php/product/edit