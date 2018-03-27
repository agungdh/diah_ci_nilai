<?php
class M_nilai extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM v_nilai where nama_kelas='X';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function lihat_nilai1() {
       $sql = " SELECT * FROM v_nilai where nama_kelas='XI';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function lihat_nilai2() {
       $sql = " SELECT * FROM v_nilai where nama_kelas='XII';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    	
    function lihat_nilai() {
       $sql = " SELECT * FROM nilai_siswa where nama_kelas='X';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
      function lihat_1() {
       $sql = " SELECT * FROM nilai_siswa where nama_kelas='XI';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
      function lihat_2() {
       $sql = " SELECT * FROM nilai_siswa where nama_kelas='XII';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function tambah($nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar){
    	$sql = "call p_nilai(?,?,?,?,?,?,?);";
		$this->db->query($sql,array($nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar));
	}
	function hapus($id_nilai){
		$sql = "call d_nilai (?);";
		$this->db->query($sql, array($id_nilai));
	}
	function ambil_data_nilai($id_nilai){
		$sql = "SELECT * FROM v_nilai where id_nilai=?";
		$query = $this->db->query($sql, array($id_nilai));
		$row = $query->row();
		return $row;
	}
	function edit_nilai($nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar,$id_nilai){

		$sql = "CALL up_nilai(?,?,?,?,?,?,?,?)";

		$this->db->query($sql,array($nis,$id_kelas,$kode_mapel,$id_semester,$kategori_nilai,$nilai,$tahun_ajar,$id_nilai));
	}
}