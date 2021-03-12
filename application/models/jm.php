<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jm extends CI_Model {
	// Fungsi untuk menampilkan semua data barang cafe
	public function view(){
		$this->load->helper('url');
		$this->db->order_by('id', 'DESC');
		return $this->db->get('jdw')->result();
	}
	
	// Fungsi untuk menampilkan data siswa berdasarkan kode barang nya
	public function view_by($kode){
		$this->db->where('id', $kode);
		return $this->db->get('jdw')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, kode barang tidak harus divalidasi
		// Jadi kode barang di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		$this->form_validation->set_rules('inid', 'ID Jadwal', 'required|max_length[10]');
		$this->form_validation->set_rules('intgl', 'Tanggal', 'required|max_length[10]');
		$this->form_validation->set_rules('insbh', 'Subuh', 'required|max_length[10]');
		$this->form_validation->set_rules('indzh', 'Dzuhur', 'required|max_length[10]');
		$this->form_validation->set_rules('inash', 'Ashar', 'required|max_length[10]');
		$this->form_validation->set_rules('inmgr', 'Magrib', 'required|max_length[10]');
		$this->form_validation->set_rules('inisy', 'Isya', 'required|max_length[10]');

			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"id" => $this->input->post('inid'),
			"tgl" => $this->input->post('intgl'),
			"sbh" => $this->input->post('insbh'),
			"dzh" => $this->input->post('indzh'),
			"ash" => $this->input->post('inash'),
			"mgr" => $this->input->post('inmgr'),
			"isy" => $this->input->post('inisy')

		);
		
		$this->db->insert('jdw', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
	public function edit($kode){
		$this->load->library('form_validation');
		$data = array(
			"tgl" => $this->input->post('intgl'),
			"sbh" => $this->input->post('insbh'),
			"dzh" => $this->input->post('indzh'),
			"ash" => $this->input->post('inash'),
			"mgr" => $this->input->post('inmgr'),
			"isy" => $this->input->post('inisy')

		);
		
		$this->db->where('id', $kode);
		$this->db->update('jdw', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
	public function delete($kode){
		$this->db->where('id', $kode);
		$this->db->delete('jdw'); // Untuk mengeksekusi perintah delete data
	}


}
