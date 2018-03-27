<?php
class M_hasil extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat() {
       $sql = " SELECT * FROM hasil_belajar where nama_kelas='X';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function lihat_data1() {
       $sql = " SELECT * FROM hasil_belajar where nama_kelas='XI';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function lihat_data2() {
       $sql = " SELECT * FROM hasil_belajar where nama_kelas='XII';";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    	function view($nis,$semester) {
       $sql = " SELECT * FROM nilai_siswa where nis=? and semester=? ";
		$query = $this->db->query($sql,array($nis,$semester));
		$row = $query->result();

		return $row;
    }

    function viewlagi($nis,$semester) {
       $sql = " SELECT * FROM  hasil_belajar where nis=? and semester=? LIMIT 1";
		$query = $this->db->query($sql,array($nis,$semester));
		$row = $query->result();

		return $row;
    }
}