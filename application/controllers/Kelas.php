<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_kelas');

	}
	public function index() {
		$data_kelas = $this->m_kelas->lihat_data();
		$this->load->view('template/template', array("isi" => "Kelas/tampil_data" , "data"=> array("data_kelas" => $data_kelas)));
	}
	function tambah(){

		$this ->load->view('template/template',array("isi" => "kelas/tambah_data"));
	}

		function tambah_data(){
		$id_kelas=$this->input->post('id_kelas');
		$nama_kelas= $this->input->post('nama_kelas');

		$this->m_kelas->tambah($id_kelas,$nama_kelas);

		redirect(base_url('kelas'));
	}
		function hapus($id_kelas){
		$this->m_kelas->hapus($id_kelas);
		redirect(base_url('kelas'));
	}
	function edit($id_kelas){
	$data_kelas = $this->m_kelas->ambil_data_kelas($id_kelas);
	$this->load->view('template/template',array("isi" => "kelas/ubah_data", "data_kelas" => $data_kelas));

	}

	function update_data(){
		$nama_kelas = $this->input->post('nama_kelas');
		$id_kelas= $this->input->post('id_kelas');

		$this->m_kelas->edit_kelas($id_kelas,$nama_kelas);
		redirect(base_url('kelas'));

	}
}