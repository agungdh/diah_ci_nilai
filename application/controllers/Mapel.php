<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_mapel');

	}
	public function index() {
		$data_mapel = $this->m_mapel->lihat_data();
		$this->load->view('template/template', array("isi" => "Mapel/tampil_data" , "data"=> array("data_mapel" => $data_mapel)));
	}
	function tambah(){

		$this ->load->view('template/template',array("isi" => "Mapel/tambah_data"));
	}

		function tambah_data(){
		$kode_mapel=$this->input->post('kode_mapel');
		$nama_mapel= $this->input->post('nama_mapel');
		$kkm= $this->input->post('kkm');
		$this->m_mapel->tambah($kode_mapel,$nama_mapel,$kkm);

		redirect(base_url('mapel'));
	}
	function edit($kode_mapel){
	$data_mapel = $this->m_mapel->ambil_data_mapel($kode_mapel);
	$this->load->view('template/template',array("isi" => "mapel/ubah_data", "data_mapel" => $data_mapel));

	}

	function update_data(){
		$nama_mapel = $this->input->post('nama_mapel');
		$kkm= $this->input->post('kkm');
		$kode_mapel= $this->input->post('kode_mapel');

		$this->m_mapel->edit_mapel($kode_mapel,$nama_mapel,$kkm);
		redirect(base_url('mapel'));

	}
	function hapus($kode_mapel){
		$this->m_mapel->hapus($kode_mapel);
		redirect(base_url('mapel'));
	}
}
