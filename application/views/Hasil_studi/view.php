<!-- <script type="text/javascript" language="javascript" >
  $(document).ready(function() {
        var dataTable = $('#lookup').DataTable( {
          "responsive": true,
          "processing": true,
        } );
      } );
</script> -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>REKAP HASIL STUDI SISWA SMK CAS</font></strong></h4>
  <a href='<?php echo base_url("semester/export_pdf/"); ?>'><button class="btn btn-danger btn-xs pull-left"><i class="fa fa-file-pdf-o  "></i> Download PDF</button></a> 
</div>

    <div class="box-body">
    <table align="pull-right">
  <tr>
  <?php 
        $no=0; foreach ($data as $items){
        $no++; 
        $a=$items->semester ;
          ?>
    <th>Nama <th>: <?php echo $items->nama; ?></th></th>
     </tr>
     <tr>

     <th>Kelas <th> : <?php echo $items->nama_kelas; ?></th></th></tr>
      <tr><th>Jurusan <th> : <?php echo $items->nama_jurusan; ?></th></th></tr>
      <tr><th>Semester <th> : <?php  
      if ($a =="I") {
        echo " I(satu)";
      }elseif ($a=="II") {
        echo"II (dua)";
      }
      ?></th></th></tr>
     <tr><th>Tahun Ajaran <th> : <?php echo $items->tahun_ajar; ?></th></th>
       <?php
        }
          ?>
     </tr>
</table><br>
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>Mata Pelajaran</th>
        <th>KKM</th>
        <th>Nilai</th>
        <th>Nilai Mutu</th>
        <th>Keterangan</th>

        </tr>
      </thead>

      <tbody>
      	<?php 
        $no=0; foreach ($data_hasil as $items){
        $no++; 
					?>
					<tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $items->nama_mapel;?></td>
            <td><?php echo $items->kkm;?></td>
            <td><?php echo number_format($items->Nilai,2) ;?></td>
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

					<?php
				}
			?>
        </tr> 
            <tr><?php 
        $no=0; foreach ($data as $items){
        $no++; 
          ?>
            <th colspan="3"><center>Rata-Rata Nilai</center></th>
            <th colspan="2"><center><?php echo number_format($items->ratarata,2) ; ?></center></th>
            <th><?php $a = $items->ratarata;
            if ($a <="55") {
                  echo "Tidak Naik Kelas";
                 }else{
                  echo "Naik Kelas";
                 }
                 ?>
            </th>
          <?php
        }
          ?>
          </tr>
         

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>


