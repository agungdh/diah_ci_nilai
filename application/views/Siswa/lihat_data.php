
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
    <h4><strong><font color=blue>Data Siswa SMK CAS</font></strong></h4>
 	<a class="btn btn-info " href="<?php echo base_url('siswa/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Data</a>
  <a href='<?php echo base_url("siswa/impor"); ?>'><button class="btn btn-primary"><i class="fa fa-plus"></i> Import Data Siswa</button></a>
<a target="_blank" href='<?php echo base_url("siswa/export_pdf/"); ?>'><button class="btn btn-danger pull-right"><i class="fa fa-file-pdf-o  "></i> Export PDF</button></a> 
</div>
    <div class="box-body">
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
				<th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Tanggal Masuk</th>
        <!-- <th>Tanggal SKCK</th> -->
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
						<td><?php echo $items->nis;?></td>
            <td><?php echo $items->nama; ?></td>
           <td><?php 

                    $tanggalbaru = date('d M Y',strtotime($items->tanggal_lahir));
                    // echo $tanggalbaru
                    echo $tanggalbaru;
                    ?>
                      
                      
                    </td>
            <td><?php echo $items->alamat;?></td>
            <td><?php echo $items->nama_jurusan;?></td>
            <td><?php 

                    $tanggalbaru = date('d M Y',strtotime($items->tanggal_masuk));
                    // echo $tanggalbaru
                    echo $tanggalbaru;
                    ?></td>
            <!-- <td><?php echo $items->tanggal_skck;?></td> -->
						<td><a class="btn btn-primary btn-xs" href="<?php echo base_url('siswa/edit/'.$items->nis); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('siswa/hapus/'.$items->nis); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td>
					</tr>
					<?php
				}
			?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>



