<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_mutu extends CI_Controller {

	function __construct(){
		parent::__construct();

		 // if ($this->session->login != true) {
   //          redirect(base_url());
   //      }

   //      if($this->session->level != 1) {
   //          redirect(base_url());
  	// }
        
		$this->load->model('m_nilai_mutu');

	}

	function index(){

	$Nilai_mutu = $this->m_nilai_mutu->lihat_data();

	$this->load->view("template/template",array("isi" => "Nilai_mutu/lihat", "Nilai_mutu" => $Nilai_mutu ));
	}

	function tambah(){
		$this->load->view("template/template",array("isi" => "Nilai_mutu/add" )) ;
	}

	function tambah_data(){
		$id =$this->input->post('id');
		$range = $this->input->post('range_nilai');
		$nilai_mutu = $this->input->post('nilai_mutu');

		$this->m_nilai_mutu->tambah_data($id,$range,$nilai_mutu);
		redirect(base_url('nilai_mutu'));
	}

	function hapus($id){
		$this->m_nilai_mutu->hapus($id);
		redirect(base_url('nilai_mutu')) ;
	}

	function edit($id){
		$nilai_mutu = $this->m_nilai_mutu->ambil_data($id);

		$this->load->view("template/template",array("isi" => "Nilai_mutu/edit", "nilai_mutu" => $nilai_mutu)) ;
	}

	function update_data(){
		$range = $this->input->post('range');
		$nilai_mutu = $this->input->post('nilai_mutu');
		$id = $this->input->post('id_mutu');

		$this->m_nilai_mutu->update($id,$range,$nilai_mutu);

		redirect(base_url('nilai_mutu'));
	}
}