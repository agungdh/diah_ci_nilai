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
    <h4><strong><font color=blue>Daftar Nilai Mutu</font></strong></h4>
 	<a class="btn btn-info " href="<?php echo base_url('nilai_mutu/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Data</a>
<!-- <a href='<?php echo base_url("siswa/export_pdf/"); ?>'><button class="btn btn-danger pull-right"><i class="fa fa-file-pdf-o  "></i> Export PDF</button></a>  -->
</div>
    <div class="box-body">
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>Range Nilai</th>
				<th>Nilai Mutu</th>
        <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      	<?php 
        $no=0; foreach ($Nilai_mutu as $items){
        $no++; 
					?>
					<tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $items->range_nilai; ?></td>
            <td><?php echo $items->nilai_mutu; ?></td>
						<td><a class="btn btn-primary btn-xs" href="<?php echo base_url('nilai_mutu/edit/'.$items->id_mutu); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('nilai_mutu/hapus/'.$items->id_mutu); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td>
					</tr>
					<?php
				}
			?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>