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
    <h4><strong><font color=blue>DATA NILAI MATA PELAJARAN SISWA SMK CAS</font></strong></h4>
  <a href='<?php echo base_url("semester/export_pdf/"); ?>'><button class="btn btn-danger pull-right"><i class="fa fa-file-pdf-o  "></i> Export PDF</button></a> 
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
        
        <!-- <th>Kode Mapel</th> -->
        <th>Mata Pelajaran</th>
        <th>KKM</th>
        <th>Nilai</th>
        <th>Nilai Mutu</th>
        <th>Keterangan</th>
        <th>Tahun Ajaran</th>
       <!--  <th>Aksi</th> -->
        </tr>
      </thead>

      <tbody>
        <?php 
        $no=0; foreach ($data_nilai as $items){
        $no++; 
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $items->nis; ?></td>
            <td><?php echo $items->nama;?></td>
            <td><?php echo $items->nama_kelas;?></td>
            <td><?php echo $items->nama_jurusan;?></td>
            <td><?php echo $items->semester;?></td>
            <td><?php echo $items->nama_mapel;?></td>
            <td><?php echo number_format($items->kkm,2);?></td>
            <td><?php echo number_format($items->Nilai,2);?></td>
            <td><?php
            $mutu = $items->Nilai;
            if ($mutu >= "80") {
              echo "A";
            }

            elseif ($mutu >="72") {
              echo "B";
            }

            elseif ($mutu >="65") {
              echo "C";
            }
            elseif ($mutu >="55") {
              echo "D";
            }
            else{
              echo "E";
            }

             ?> </td>
            <td><?php 
            $Keterangan = $mutu;

            if ($Keterangan = "A") {
              echo "Lulus";
            } 
            elseif ($Keterangan ="B") {
              echo"Lulus";
            }
            elseif ($Keterangan ="C") {
              echo "Lulus";
            }
            elseif ($Keterangan ="D") {
              echo "Tidak Lulus";
            }
            else{
              echo "Tidak Lulus";
            }

            ?>
            <td><?php echo $items->tahun_ajar;?></td>

         <!--    <td><?php echo $items->nilai_mutu;?></td> -->
        <!--     <td><a class="btn btn-primary btn-xs" href="<?php echo base_url('nilai/edit/'.$items->id_nilai); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('nilai/hapus/'.$items->id_nilai); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td> -->
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
        var dataTable = $('#lookup').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script>


<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>DATA NILAI MATA PELAJARAN SISWA SMK CAS</font></strong></h4>
  <a href='<?php echo base_url("semester/export_pdf/"); ?>'><button class="btn btn-danger pull-right"><i class="fa fa-file-pdf-o  "></i> Export PDF</button></a> 
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
        
        <!-- <th>Kode Mapel</th> -->
        <th>Mata Pelajaran</th>
        <th>KKM</th>
        <th>Nilai</th>
        <th>Nilai Mutu</th>
        <th>Keterangan</th>
        <th>Tahun Ajaran</th>
       <!--  <th>Aksi</th> -->
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
            <td><?php echo $items->nama_mapel;?></td>
            <td><?php echo number_format($items->kkm,2);?></td>
            <td><?php echo number_format($items->Nilai,2);?></td>
            <td><?php
            $mutu = $items->Nilai;
            if ($mutu >= "80") {
              echo "A";
            }

            elseif ($mutu >="72") {
              echo "B";
            }

            elseif ($mutu >="65") {
              echo "C";
            }
            elseif ($mutu >="55") {
              echo "D";
            }
            else{
              echo "E";
            }

             ?> </td>
            <td><?php 
            $Keterangan = $mutu;

            if ($Keterangan = "A") {
              echo "Lulus";
            } 
            elseif ($Keterangan ="B") {
              echo"Lulus";
            }
            elseif ($Keterangan ="C") {
              echo "Lulus";
            }
            elseif ($Keterangan ="D") {
              echo "Tidak Lulus";
            }
            else{
              echo "Tidak Lulus";
            }

            ?>
            <td><?php echo $items->tahun_ajar;?></td>

         <!--    <td><?php echo $items->nilai_mutu;?></td> -->
        <!--     <td><a class="btn btn-primary btn-xs" href="<?php echo base_url('nilai/edit/'.$items->id_nilai); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('nilai/hapus/'.$items->id_nilai); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td> -->
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
        var dataTable = $('#lookup4').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>DATA NILAI MATA PELAJARAN SISWA SMK CAS</font></strong></h4>
  <a href='<?php echo base_url("semester/export_pdf/"); ?>'><button class="btn btn-danger pull-right"><i class="fa fa-file-pdf-o  "></i> Export PDF</button></a> 
</div>
    <div class="box-body">
    <table id="lookup4" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Semester</th>
        
        <!-- <th>Kode Mapel</th> -->
        <th>Mata Pelajaran</th>
        <th>KKM</th>
        <th>Nilai</th>
        <th>Nilai Mutu</th>
        <th>Keterangan</th>
        <th>Tahun Ajaran</th>
       <!--  <th>Aksi</th> -->
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
            <td><?php echo $items->nama_mapel;?></td>
            <td><?php echo number_format($items->kkm,2);?></td>
            <td><?php echo number_format($items->Nilai,2);?></td>
            <td><?php
            $mutu = $items->Nilai;
            if ($mutu >= "80") {
              echo "A";
            }

            elseif ($mutu >="72") {
              echo "B";
            }

            elseif ($mutu >="65") {
              echo "C";
            }
            elseif ($mutu >="55") {
              echo "D";
            }
            else{
              echo "E";
            }

             ?> </td>
            <td><?php 
            $Keterangan = $mutu;

            if ($Keterangan = "A") {
              echo "Lulus";
            } 
            elseif ($Keterangan ="B") {
              echo"Lulus";
            }
            elseif ($Keterangan ="C") {
              echo "Lulus";
            }
            elseif ($Keterangan ="D") {
              echo "Tidak Lulus";
            }
            else{
              echo "Tidak Lulus";
            }

            ?>
            <td><?php echo $items->tahun_ajar;?></td>

         <!--    <td><?php echo $items->nilai_mutu;?></td> -->
        <!--     <td><a class="btn btn-primary btn-xs" href="<?php echo base_url('nilai/edit/'.$items->id_nilai); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('nilai/hapus/'.$items->id_nilai); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td> -->
          </tr>
          <?php
        }
      ?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>


