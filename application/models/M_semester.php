<?php
class M_semester extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM tb_semester;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }
      function tambah($id_semester,$semester){
    	$sql = "call p_semester(?,?);";
		$this->db->query($sql,array($id_semester,$semester));

    }
    function hapus ($id_semester){
    	$sql ="call d_semester(?);";
    	$this->db->query($sql,array($id_semester));
    }
    function ambil_data_semester($id_semester){
		$sql = "SELECT * FROM tb_semester where id_semester=?";
		$query = $this->db->query($sql, array($id_semester));
		$row = $query->row();
		return $row;
	}
	function edit_semester($semester,$id_semester){

		$sql = "CALL up_semester(?,?)";

		$this->db->query($sql,array($semester,$id_semester));
	}
	
}