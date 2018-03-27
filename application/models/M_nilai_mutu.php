<?php
class M_nilai_mutu extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function lihat_data() {
       $sql = " SELECT * FROM tb_mutu;";
		$query = $this->db->query($sql,array());
		$row = $query->result();

		return $row;
    }

    // tambah nilai mutu
    function tambah_data($id,$range,$nilai_mutu){
    	$sql = "call p_mutu(?,?,?)" ;
    	$query =$this->db->query($sql,array($id,$range,$nilai_mutu)) ;
    }

    function hapus($id){
    	$sql = "call d_mutu(?)" ;
    	$query = $this->db->query($sql,array($id));
    }

    function ambil_data($id){
    	$sql = "SELECT * from tb_mutu where id_mutu=?" ;
    	$query = $this->db->query($sql,array($id));
    	$row = $query->row();

    	return $row ;

    }

    function update($range,$nilai_mutu,$id){
    	$sql = "call up_mutu(?,?,?)" ;
    	$query =$this->db->query($sql,array($range,$nilai_mutu,$id)) ;

    }

}
