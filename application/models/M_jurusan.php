<?php
class M_jurusan extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM tb_jurusan;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    function tambah($id_jurusan,$nama_jurusan){
    	$sql = "call p_jurusan(?,?);";
		$this->db->query($sql,array($id_jurusan,$nama_jurusan));

    }
       function hapus ($id_jurusan){
    	$sql="call d_jurusan(?);";
    	$this->db->query($sql,array($id_jurusan));
    }
      function ambil_data_jurusan($id_jurusan){
		$sql = "SELECT * FROM tb_jurusan where id_jurusan=?";
		$query = $this->db->query($sql, array($id_jurusan));
		$row = $query->row();
		return $row;
	}
	function edit_jurusan($nama_jurusan,$id_jurusan){

		$sql = "CALL up_jurusan(?,?)";

		$this->db->query($sql,array($nama_jurusan,$id_jurusan));
	}
}