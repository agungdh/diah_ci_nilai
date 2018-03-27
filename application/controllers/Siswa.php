<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct();


		 if ($this->session->login != true) {
            redirect(base_url());
        }

        if($this->session->level != 1) {
            redirect(base_url());
  	}
        
		$this->load->model('m_siswa');
		$this->load->library('dompdf_gen');
	}

	function index() {

		$data_siswa = $this->m_siswa->lihat_data();
		
		$this->load->view('template/template', array("isi" => "Siswa/lihat_data" , "data" => $data_siswa));
	}

	// function data_siswa($id_kelas=null) {

	// 	$id_kelas == null ? $id_kelas =1 : $id_kelas = $id_kelas;

	// 	$data_siswa = $this->m_siswa->lihat_data();
	// 	$kelas10 = $this->m_siswa->kelasX($id_kelas);

	// 	$data_view['data_siswa'] =$data_siswa ;
	// 	$data_view['kelas10'] =$kelas10 ;
	// 	$data_view['kelas'] =$id_kelas ;
		

	// 	$this->load->view('template/template', array("isi" => "Siswa/lihat_data" , "data" => $data_view));
	// }
	
		function tambah(){

		$this ->load->view('template/template',array("isi" => "Siswa/tambah_data"));
	}

		function tambah_data(){
		$nis =$this->input->post('nis');
		$nama= $this->input->post('nama');
		$tanggal_lahir= $this->input->post('tanggal_lahir');
		$alamat= $this->input->post('alamat');
		$id_jurusan= $this->input->post('id_jurusan');
		$tanggal_masuk=$this->input->post('tanggal_masuk');
		$tanggal_skck=$this->input->post('tanggal_skck');

		$this->m_siswa->tambah($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck);

		redirect(base_url('siswa'));
	}
		function hapus($nis){
		$this->m_siswa->hapus($nis);
		redirect(base_url('siswa'));
	}
	function edit($nis){
	$data_siswa = $this->m_siswa->ambil_data_siswa($nis);
	$this->load->view('template/template',array("isi" => "Siswa/ubah_data", "data_siswa" => $data_siswa));

	}

	function update_data(){
		$nama = $this->input->post('nama');
		$tanggal_lahir= $this->input->post('tanggal_lahir');
		$alamat= $this->input->post('alamat');
		$id_jurusan= $this->input->post('id_jurusan');
		$tanggal_masuk= $this->input->post('tanggal_masuk');
		$tanggal_skck= $this->input->post('tanggal_skck');
		$nis = $this->input->post('nis');
		$this->m_siswa->edit_siswa($nis,$nama,$tanggal_lahir,$alamat,$id_jurusan,$tanggal_masuk,$tanggal_skck);
		redirect(base_url('siswa'));

	}
	function export_pdf(){
	$data= $this->m_siswa->lihat_data();
	$this->load->view('siswa/pdf_siswa',array("data"=> $data));
		
		$paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("data_siswa.pdf", array('Attachment'=>0)); 

}
function impor(){
		$this->load->view('template/template',array("isi" => "siswa/impor"));
	}

	function aksi_impor(){
		$this->load->library('excelreader/Excel_reader');
		if ($_FILES['excel']['size']==0) {
			redirect(base_url('siswa/impor?file_kosong=1'));	
	}

			$a="data_siswa";
			$ekstensi_diperbolehkan	= array('xls');
			$nama = $_FILES['excel']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			//awal
			//tengah
			//akhir
			//end() -> akhir
			$ukuran	= $_FILES['excel']['size'];
			$file_tmp = $_FILES['excel']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5242880){			
					if(move_uploaded_file($file_tmp, 'berkas/temp/'.$a.'.xls')){
						// echo 'FILE BERHASIL DI UPLOAD';
					}else{
						// echo 'GAGAL MENGUPLOAD FILE';
						redirect(base_url('siswa/impor?upload_gagal=1'));
					}
				}else{
					redirect(base_url('siswa/impor?file_kebesaran=1'));	
					// echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				redirect(base_url('siswa/impor?ekstensi_salah=1'));	
				// echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		
		$this->excel_reader->setOutputEncoding('230787');
		$this->excel_reader->read('berkas/temp/'.$a.'.xls');

		$data = $this->excel_reader->sheets[0];
		// echo $data['cells'][3][1]; //['cells'][bawah][samping]
		// echo "<br>";
		// echo $data['numRows']; //jumah baris (bawah)

		for ($i=4; $i <= $data['numRows']; $i++) { 
			// echo $data['cells'][$i][1] . "<br>";
			$this->m_siswa->tambah_siswa($data['cells'][$i][1],$data['cells'][$i][2],$data['cells'][$i][3],$data['cells'][$i][4],$data['cells'][$i][5],$data['cells'][$i][6],$data['cells'][$i][7]);
		}

		redirect(base_url('siswa'));	
}
}
