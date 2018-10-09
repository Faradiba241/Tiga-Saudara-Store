<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function input_barang()
	{
		$this->load->view('admin/barang');
}

public function list_barang()
	{
		$this->load->view('admin/list');
}

public function edit_barang()
	{
		if(!empty($this->input->post()))
	{
		$this->admin_model->edit();
	}
		$this->load->view('admin/edit');
	}
}   


public function input_kategori()
	{
		$this->load->view('admin/kategori');
}

public function list_kategori()
	{
		$this->load->view('admin/list');
}

public function edit_kategori()
	{
		if(!empty($this->input->post()))
	{
		$this->admin_model->edit();
	}
		$this->load->view('admin/edit');
	}
}