<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('model_profil');
		$this->load->helper('url');
	}
 
	function index(){
		$data['profil'] = $this->model_profil->get_data()->result();
		$this->load->view('profil',$data);
	}

	function add() {
		$this->load->view('add');
	}

	function add_proses() {
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
			);
		$this->model_profil->add_data($data);
		redirect('profil/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['profil'] = $this->model_profil->edit_data($where)->row();
		$this->load->view('edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
	 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->model_profil->update_proses($where,$data);
		redirect('profil/index');
	}

	function delete($id){
		$where = array('id' => $id);
		$this->model_profil->hapus_data($where);
		redirect('profil/index');
	}
}
