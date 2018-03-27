<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_studi extends CI_Controller {

	function __construct(){
		parent::__construct();

		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('M_hasil');

	}
	public function index() {
		$data_hasil = $this->M_hasil->lihat();

		$data = $this->M_hasil->lihat_data1();
		$dat = $this->M_hasil->lihat_data2();

		$data_view['data'] = $data_hasil;
		$data_view['nilai']=$data ;
		$data_view['dat']=$dat;

		$this->load->view('template/template', array("isi" => "Hasil_studi/tampil_data" , "data"=> $data_view));
	}
		public function view($nis,$semester) {
		$data = $this->M_hasil->viewlagi($nis,$semester) ;
		$data_hasil = $this->M_hasil->view($nis,$semester);

		$hasil['data_hasil'] = $data_hasil ;
		$hasil['data'] = $data ;

		$this->load->view('template/template', array("isi" => "Hasil_studi/view" , "data"=> $hasil));
	}
}