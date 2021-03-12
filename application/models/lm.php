<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lm extends CI_Model{	
	/**
	$this->load->helper('url');
	$this->load->library('form_validation');
	**/
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);

	}	

	public function view(){

		$this->load->helper('url');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('v_jdw')->result();
	}
	
}

