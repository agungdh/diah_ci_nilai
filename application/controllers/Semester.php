<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_semester');

	}
	public function index() {
		$data_semester = $this->m_semester->lihat_data();
		$this->load->view('template/template', array("isi" => "Semester/tampil_data" , "data"=> array("data_semester" => $data_semester)));
	}
	function tambah(){

		$this ->load->view('template/template',array("isi" => "semester/tambah_data"));
	}

	function tambah_data(){
		$id_semester= $this->input->post('id_semester');
		$semester= $this->input->post('semester');
		$this->m_semester->tambah($id_semester,$semester);

		redirect(base_url('semester'));
	}
	function edit($id_semester){
	$data_semester = $this->m_semester->ambil_data_semester($id_semester);

	$this->load->view('template/template',array("isi" => "semester/ubah_data", "data_semester" => $data_semester));

	}

	function update_data(){
		$semester = $this->input->post('semester');
		$id_semester= $this->input->post('id_semester');

		$this->m_semester->edit_semester($id_semester,$semester);
		redirect(base_url('semester'));

	}
	function hapus($id_semester){
		$this->m_semester->hapus($id_semester);
		redirect(base_url('semester'));
	}


}