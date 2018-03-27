<?php
class M_Siswa extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM data_siswaa;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function kelasX($id_kelas) {
       $sql = "SELECT * FROM data_siswaa where id_kelas=?";
		$query = $this->db->query($sql,array($id_kelas));
		$row = $query->result();

		return $row;
    }
		function tambah($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck){
		$sql = "call p_siswa(?,?,?,?,?,?,?);";
		$this->db->query($sql,array($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck));
	}
	function hapus ($nis){
		$sql=" call d_siswa(?)";
		$query = $this->db->query($sql,array($nis));

	}
	function ambil_data_siswa($nis){
		$sql = "SELECT * FROM data_siswaa where nis=?";
		$query = $this->db->query($sql, array($nis));
		$row = $query->row();
		return $row;
	}
	function edit_siswa($nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck,$nis){

		$sql = "CALL up_siswa(?,?,?,?,?,?,?)";

		$this->db->query($sql,array($nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck,$nis));
	}
	// impor data
	function tambah_siswa($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck){
		$sql = "call p_siswa(?,?,?,?,?,?,?);";
		$this->db->query($sql,array($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck));
}
function pdf() {
       $sql = " SELECT * FROM data_siswaa;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
}