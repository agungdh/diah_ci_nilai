<?php
class M_kelas extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM tb_kelas;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
    	function tambah($id_kelas,$nama_kelas){
		$sql = "call p_kelas(?,?);";
		$this->db->query($sql,array($id_kelas,$nama_kelas));

    }
    function hapus ($id_kelas){
    	$sql="call d_kelas(?);";
    	$this->db->query($sql,array($id_kelas));
    }
    function ambil_data_kelas($id_kelas){
		$sql = "SELECT * FROM tb_kelas where id_kelas=?";
		$query = $this->db->query($sql, array($id_kelas));
		$row = $query->row();
		return $row;
	}
	function edit_kelas($nama_kelas,$id_kelas){

		$sql = "CALL up_kelas(?,?)";

		$this->db->query($sql,array($nama_kelas,$id_kelas));
	}
}