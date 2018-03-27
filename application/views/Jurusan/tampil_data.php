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
    <h4><strong><font color=blue>Daftar Jurusan SMK CAS</font></strong></h4>
 	<a class="btn btn-info " href="<?php echo base_url('jurusan/tambah'); ?>"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
    <div class="box-body">
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
        <th>Jurusan</th>
				<th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      	<?php 
        $no=0; foreach ($data_jurusan as $items){
        $no++; 
					?>
					<tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $items->nama_jurusan; ?></td>
						<td><a class="btn btn-primary btn-xs" href="<?php echo base_url('jurusan/edit/'.$items->id_jurusan); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('jurusan/hapus/'.$items->id_jurusan); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            </td>
					</tr>
					<?php
				}
			?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>