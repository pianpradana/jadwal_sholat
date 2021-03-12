<?php 
 
class l extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('lm');
 
	}
 
	function index(){
		$data['l'] = $this->lm->view();
		$this->load->view('lg',$data);
	}
 
	function aksi_login(){
		$this->load->helper('url');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'us' => $username,
			'pw' => $password
			);
		$cek = $this->lm->cek_login("adm",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "l"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("j"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('l'));
	}
}