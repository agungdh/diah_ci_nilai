<?php
class M_user extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
		$sql = "SELECT * FROM t_user";
		$query = $this->db->query($sql);
		$row = $query->result();

		return $row;
	}
	function tambah($nama,$username,$password,$level){
		$sql = "call sp_user(?,?,?,?);";
		$this->db->query($sql,array($nama, $username, $password, $level));
	}
	function hapus($id_user){
		$sql = "call d_user(?);";
		$this->db->query($sql,array($id_user));

	}
	function edit_user($nama,$username,$id_user){
		$sql = "call up_user(?,?,?);";
		$this->db->query($sql,array($nama,$username,$id_user));
	}

	function ambil_data_user($id_user){
		$sql = "SELECT * FROM t_user where id_user=?";
		$query = $this->db->query($sql, array($id_user));
		$row = $query->row();
		return $row;
	}
	function ambil_data_password($id_user){
	$sql = "SELECT * from t_user WHERE id_user=?";
		$query = $this->db->query($sql,array($id_user));
		$row = $query->row();
		return $row;
	}
	function ubah_password($password,$id_user){
		$sql="call up_password (?,?);";
		$query = $this->db->query($sql,array($password,$id_user));
	}
}