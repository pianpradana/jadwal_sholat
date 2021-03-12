<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class j extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "l"){
			redirect(base_url("l"));
		}

		$this->load->model('jm'); // Load CafeModel ke controller ini
	}
	
	public function index(){
		$data['j'] = $this->jm->view();
		$this->load->view('n/sh.php', $data);
	}
	
	public function tambah(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->jm->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->jm->save(); // Panggil fungsi save() yang ada di CafeModel.php
				redirect('j');
			}
		}
		
		$this->load->view('n/ad.php');
	}
	
	public function ubah($kode){
		$this->load->helper('url');
		$this->load->library('form_validation');
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->jm->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->jm->edit($kode); // Panggil fungsi edit() yang ada di CafeModel.php
				redirect('j');
			}
		}
		
		$data['j'] = $this->jm->view_by($kode);
		$this->load->view('n/up.php', $data);
	}
	
	public function hapus($kode){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->jm->delete($kode); // Panggil fungsi delete() yang ada di CafeModel.php
		redirect('j');
	}



	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}

}
