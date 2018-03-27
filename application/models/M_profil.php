<?php
class M_profil extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_data_profil() {
		$sql = "SELECT * FROM t_user WHERE id_user=? ";
		$query = $this->db->query($sql, array($this->session->id_user));
		$row = $query->row();
		
		$data_user = array('nama' => $row->nama);

		return $data_user;
	}

	function ganti_password($password,$id_user) {
		$sql="UPDATE  t_user set password= sha2(?,512) where id_user=?";
		$query = $this->db->query($sql, array ($password,$id_user));
	}

	function ubah_profil(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');

		$sql = "UPDATE t_user set nama=? where id_user=? ";
		$query = $this->db->query($sql, array($nama, $id_user));	

		return $nama;
	}
}
?>