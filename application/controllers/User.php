<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();


		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
        }
        

		$this->load->model('m_user');
	}
	public function index() {
		$data_user = $this->m_user->lihat_data();
		$this->load->view('template/template', array("isi" => "User/tampil_data" , "data"=> array("data_user" => $data_user)));
	}
	function tambah(){

		$this ->load->view('template/template',array("isi" => "User/tambah_data"));
	}

		function tambah_data(){
		$nama_user = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$this->m_user->tambah($nama_user, $username, $password, $level);

		redirect(base_url('user'));
	}
		function hapus($id_user){
		$this->m_user->hapus($id_user);
		redirect(base_url('user'));
	}
	function edit($id_user){
	$data_user = $this->m_user->ambil_data_user($id_user);
	$this->load->view('template/template',array("isi" => "User/ubah_data", "data_user" => $data_user));
	}

	function update_data(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$id_user = $this->input->post('id_user');
		$this->m_user->edit_user($id_user,$nama,$username);
		redirect(base_url('user'));
	}
	function editt($id_user){
		$data_password = $this->m_user->ambil_data_password($id_user);

		$this->load->view('template/template',array("isi" => "User/ubah_password", "data_password" => $data_password));

	}

	function update_password(){
		$password = $this->input->post('password');
		$id_user = $this->input->post('id_user');

		$this->m_user->ubah_password($id_user,$password);
		redirect(base_url('user'));

	}
}