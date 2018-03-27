<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_profil');		
	}

	function index() {
		$data_user = $this->m_profil->ambil_data_profil();	
		$this->load->view("template/template", array("isi"=>"template/profil", "data"=>$data_user));
	}

	function aksi_ubah_profil(){
		$nama = $this->m_profil->ubah_profil();

		$this->session->set_userdata('nama', $nama);

		redirect(base_url('welcome'));
	}

	function ganti_password() {
		$this->load->view("template/template", array("isi"=>"template/ganti_password"));
	}

	function aksi_ganti_password() {
		$password = $this->input->post('password') ;
		$id_user = $this->input->post('id_user') ;
		$this->m_profil->ganti_password($password,$id_user);

		redirect(base_url('profil'));
	}


	function unggah_foto(){
		$foto = $this->m_profil->ambil_data_profil();
		
		//$this->load->view('Masyarakat/edit',array("data_rakyat" => $data_masyarakat));

		$this->load->view('template/template',array("isi" => "User/ubah_foto", "edit" => $foto));
	}

	function foto(){
		$nama =$this->input->post('nama');
		$id_user =$this->input->post('id_user');

		$this->m_profil->ubah_profil($nama,$id_user);

			$ekstensi_diperbolehkan	= array('jpg','jpeg','png', 'bmp');
			$nama = $_FILES['foto']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];	
 

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5242880){			
					if(move_uploaded_file($file_tmp, 'upload/'.$id_user.'.jpg')){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						// echo 'GAGAL MENGUPLOAD FILE';
						redirect(base_url('profil/unggah_foto?upload_gagal=1'));
					}
				}else{
					redirect(base_url('profil/unggah_foto?file_kebesaran=1'));	
					// echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				redirect(base_url('profil/unggah_foto?ekstensi_salah=1'));	
				// echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

	redirect(base_url('welcome'));

	}

}