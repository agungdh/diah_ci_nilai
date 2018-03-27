<li class="header">MENU ADMIN</li>
	<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home text-aqua"></i><span>Beranda</span></a></li>
	<li><a href="<?php echo base_url('siswa'); ?>"><i class="fa fa-table text-aqua"></i><span>Data Siswa CAS</span></a></li>
	<li><a href="<?php echo base_url('kelas'); ?>"><i class="fa fa-book text-aqua"></i><span>Kelas</span></a></li>
	<li><a href="<?php echo base_url('jurusan'); ?>"><i class="fa fa-book text-aqua"></i><span>Jurusan</span></a></li>
	<li><a href="<?php echo base_url('mapel'); ?>"><i class="fa fa-book text-aqua"></i><span>Mata Pelajaran</span></a></li>
	<li><a href="<?php echo base_url('semester'); ?>"><i class="fa fa-book text-aqua"></i><span>Semester</span></a></li>
	<!-- <li><a href="<?php echo base_url('nilai_mutu'); ?>"><i class="fa fa-book text-aqua"></i><span>Nilai Mutu</span></a></li> -->
	<li><a href="#"><i class="fa fa-book text-aqua"></i><span>Data Nilai Siswa</span>
			</a>
			<ul class="treeview-menu">
			<li class="active"><a href="<?php echo base_url('nilai'); ?>"><i class="fa fa-circle-o"></i>Input Nilai</a></li>
			<li><a href="<?php echo base_url('nilai/lihat_nilai_mapel'); ?>"><i class="fa fa-circle-o"></i>Nilai Mata Pelajaran</a></li></ul></li>
	<!-- <li><a href="<?php echo base_url('nilai'); ?>"><i class="fa fa-book text-aqua"></i><span>Nilai Siswa</span></a></li> -->
	<li><a href="<?php echo base_url('hasil_studi'); ?>"><i class="fa fa-book text-aqua"></i><span>Hasil Studi</span></a></li>
	<li><a href="<?php echo base_url('user'); ?>"><i class="fa fa-users text-aqua"></i><span>User</span></a></li>