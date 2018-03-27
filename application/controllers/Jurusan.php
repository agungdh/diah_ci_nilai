<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_jurusan');

	}
	public function index() {
		$data_jurusan = $this->m_jurusan->lihat_data();
		$this->load->view('template/template', array("isi" => "Jurusan/tampil_data" , "data"=> array("data_jurusan" => $data_jurusan)));
	}
	function tambah(){

		$this ->load->view('template/template',array("isi" => "jurusan/tambah_data"));
	}

		function tambah_data(){
		$id_jurusan=$this->input->post('id_jurusan');
		$nama_jurusan= $this->input->post('nama_jurusan');

		$this->m_jurusan->tambah($id_jurusan,$nama_jurusan);

		redirect(base_url('jurusan'));
	}
	function hapus($id_jurusan){
		$this->m_jurusan->hapus($id_jurusan);
		redirect(base_url('jurusan'));
	}
	function edit($id_jurusan){
	$data_jurusan = $this->m_jurusan->ambil_data_jurusan($id_jurusan);
	$this->load->view('template/template',array("isi" => "jurusan/ubah_data", "data_jurusan" => $data_jurusan));

	}

	function update_data(){
		$nama_jurusan = $this->input->post('nama_jurusan');
		$id_jurusan= $this->input->post('id_jurusan');

		$this->m_jurusan->edit_jurusan($id_jurusan,$nama_jurusan);
		redirect(base_url('jurusan'));

	}
}