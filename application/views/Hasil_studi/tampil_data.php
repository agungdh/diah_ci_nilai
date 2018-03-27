<script type="text/javascript" language="javascript" >
  $(document).ready(function() {
        var dataTable = $('#lookup').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script>
<div class="box box-primary">
  <div class="box-header with-border">
  <h4><strong><font color=blue><?php foreach ($data as $items) {
  # code...
 ?> <?php }?> HASIL STUDI SISWA SMK CAS KELAS 
    <?php echo $items->nama_kelas; ?> </font></strong></h4>
</div>
    <div class="box-body">
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Tahun Ajaran</th>
        <th>Rata-rata Nilai</th>
        <th>Keterangan</th>
				<th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      	<?php 
        $no=0; foreach ($data as $items){
        $no++; 
					?>
					<tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $items->nis; ?></td>
            <td><?php echo $items->nama;?></td>
            <td><?php echo $items->nama_kelas;?></td>
            <td><?php echo $items->nama_jurusan;?></td>
            <td><?php echo $items->semester;?></td>
            <td><?php echo $items->tahun_ajar;?></td>
            <td><?php echo number_format($items->ratarata,2) ;?></td>
            <td><?php $a = $items->ratarata;
            if ($a <="55") {
                  echo "Tidak Naik Kelas";
                 }else{
                  echo "Naik Kelas";
                 }
                 ?>
            </td>
           <!--    <td><?php echo $items->nilai_mutu;?></td> -->
            <td><a class="btn btn-default btn-xs" href="<?php echo base_url('Hasil_studi/view/'.$items->nis.'/'.$items->semester); ?>"><i class="fa fa-eye"></i> View</a> 
            </td>
          </tr>
          <?php
        }
      ?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>

<script type="text/javascript" language="javascript" >
  $(document).ready(function() {
        var dataTable = $('#lookup1').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script>
<div class="box box-primary">
  <div class="box-header with-border">
 <h4><strong><font color=blue> <?php foreach ($nilai as $items) {
  # code...
 ?> <?php }?> HASIL STUDI SISWA SMK CAS KELAS 
    <?php echo $items->nama_kelas; ?> </font></strong></h4>
</div>
    <div class="box-body">
    <table id="lookup1" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Tahun Ajaran</th>
        <th>Rata-rata Nilai</th>
        <th>Keterangan</th>
        <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php 
        $no=0; foreach ($nilai as $items){
        $no++; 
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $items->nis; ?></td>
            <td><?php echo $items->nama;?></td>
            <td><?php echo $items->nama_kelas;?></td>
            <td><?php echo $items->nama_jurusan;?></td>
            <td><?php echo $items->semester;?></td>
            <td><?php echo $items->tahun_ajar;?></td>
            <td><?php echo number_format($items->ratarata,2) ;?></td>
            <td><?php $a = $items->ratarata;
            if ($a <="55") {
                  echo "Tidak Naik Kelas";
                 }else{
                  echo "Naik Kelas";
                 }
                 ?>
            </td>
           <!--    <td><?php echo $items->nilai_mutu;?></td> -->
            <td><a class="btn btn-default btn-xs" href="<?php echo base_url('Hasil_studi/view/'.$items->nis.'/'.$items->semester); ?>"><i class="fa fa-eye"></i> View</a> 
            </td>
          </tr>
          <?php
        }
      ?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>

<script type="text/javascript" language="javascript" >
  $(document).ready(function() {
        var dataTable = $('#lookup2').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script>
<div class="box box-primary">
  <div class="box-header with-border">
  <h4><strong><font color=blue><?php foreach ($dat as $items) {
  # code...
 ?> <?php }?> HASIL STUDI SISWA SMK CAS KELAS 
    <?php echo $items->nama_kelas; ?> </font></strong></h4>
</div>
    <div class="box-body">
    <table id="lookup2" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Tahun Ajaran</th>
        <th>Rata-rata Nilai</th>
        <th>Keterangan</th>
        <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php 
        $no=0; foreach ($dat as $items){
        $no++; 
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $items->nis; ?></td>
            <td><?php echo $items->nama;?></td>
            <td><?php echo $items->nama_kelas;?></td>
            <td><?php echo $items->nama_jurusan;?></td>
            <td><?php echo $items->semester;?></td>
            <td><?php echo $items->tahun_ajar;?></td>
            <td><?php echo number_format($items->ratarata,2) ;?></td>
            <td><?php $a = $items->ratarata;
            if ($a <="55") {
                  echo "Tidak Naik Kelas";
                 }else{
                  echo "Naik Kelas";
                 }
                 ?>
            </td>
           <!--    <td><?php echo $items->nilai_mutu;?></td> -->
            <td><a class="btn btn-default btn-xs" href="<?php echo base_url('Hasil_studi/view/'.$items->nis.'/'.$items->semester); ?>"><i class="fa fa-eye"></i> View</a> 
            </td>
          </tr>
          <?php
        }
      ?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>