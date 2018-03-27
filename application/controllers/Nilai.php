<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_nilai');

	}
	public function index() {
		$data_nilai = $this->m_nilai->lihat_data();

		$data = $this->m_nilai->lihat_nilai1();
		$dat = $this->m_nilai->lihat_nilai2();

		$data_view['data_nilai'] = $data_nilai;
		$data_view['nilai']=$data ;
		$data_view['dat']=$dat;

		$this->load->view('template/template', array("isi" => "Nilai_siswa/tampil_data" , "data"=> $data_view));
	}

	function tambah(){

		$this ->load->view('template/template',array("isi" => "Nilai_siswa/tambah_data"));
	}

		function tambah_data(){
		$nis= $this->input->post('nis');
		$id_kelas=$this->input->post('id_kelas');
		$kode_mapel= $this->input->post('kode_mapel');
		$id_semester= $this->input->post('id_semester');
		$kategori_nilai= $this->input->post('kategori_nilai');
		$nilai= $this->input->post('nilai');
		$tahun_ajar= $this->input->post('tahun_ajar');

		$this->m_nilai->tambah($nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar);

		redirect(base_url('Nilai'));
	}
		function hapus($id_nilai){
		$this->m_nilai->hapus($id_nilai);
		redirect(base_url('Nilai'));
	}
	function edit($id_nilai){
	$data_nilai = $this->m_nilai->ambil_data_nilai($id_nilai);
	$this->load->view('template/template',array("isi" => "Nilai_siswa/ubah_data", "data_nilai" => $data_nilai));

	}

	function update_data(){
		$nis= $this->input->post('nis');
		$id_kelas=$this->input->post('id_kelas');
		$kode_mapel= $this->input->post('kode_mapel');
		$id_semester= $this->input->post('id_semester');
		$kategori_nilai= $this->input->post('kategori_nilai');
		$nilai= $this->input->post('nilai');
		$tahun_ajar= $this->input->post('tahun_ajar');
		$id_nilai= $this->input->post('id_nilai');

		$this->m_nilai->edit_nilai($id_nilai,$nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar);
		redirect(base_url('Nilai'));

	}
	function lihat_nilai_mapel(){
		$data_nilai = $this->m_nilai->lihat_nilai();

		$data = $this->m_nilai->lihat_1();
		$dat = $this->m_nilai->lihat_2();

		$data_view['data_nilai'] = $data_nilai;
		$data_view['nilai']=$data ;
		$data_view['dat']=$dat;

		$this->load->view('template/template', array("isi" => "Nilai_siswa/nilai_mapel" , "data"=> $data_view));
	}

}