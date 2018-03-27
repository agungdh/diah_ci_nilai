<?php
class M_mapel extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM tb_mapel;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
     function tambah($kode_mapel,$nama_mapel,$kkm){
    	$sql = "call p_mapel(?,?,?);";
		$this->db->query($sql,array($kode_mapel,$nama_mapel,$kkm));

    }
    function ambil_data_mapel($kode_mapel){
		$sql = "SELECT * FROM tb_mapel where kode_mapel=?";
		$query = $this->db->query($sql, array($kode_mapel));
		$row = $query->row();
		return $row;
	}
	function edit_mapel($nama_mapel,$kkm,$kode_mapel){

		$sql = "CALL up_mapel(?,?,?)";

		$this->db->query($sql,array($nama_mapel,$kkm,$kode_mapel));
	}
	 function hapus ($kode_mapel){
    	$sql="call d_mapel(?);";
    	$this->db->query($sql,array($kode_mapel));
    }
}