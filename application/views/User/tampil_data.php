
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
    <h4><strong><font color=blue>DATA USER</font></strong></h4>
 	<a class="btn btn-info " href="<?php echo base_url('user/tambah'); ?>"><i class="fa fa-plus"></i>Tambah</a>
</div>
    <div class="box-body">
    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
        <th>NO</th>
				<th>Nama User</th>
        <th>Username</th>
        <th>Level</th>
				<th>Aksi</th>
        </tr>
      </thead>

      <tbody>
      	<?php 
        $no=0; foreach ($data_user as $items){
        $no++; 
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $items->nama; ?></td>
            <td><?php echo $items->username; ?></td>
            <td><?php 
            $a = $items->level;
            if ($a =="1") {
                echo "ADMIN/OPERATOR";
                 }
                 elseif ($a=="2"){
                  echo "GURU";
                 }else{

                  echo"SISWA";

                 }
             ?>
            </td>
						<td><a class="btn btn-primary btn-xs" href="<?php echo base_url('user/edit/'.$items->id_user); ?>"><i class="fa fa-pencil"></i> Update</a> 
            <a class="btn btn-danger btn-xs" href="<?php echo base_url('user/hapus/'.$items->id_user); ?>" onclick="return confirm('Yakin Ingin Menghapus Data ini ?')" ><i class="fa fa-trash-o"></i> Delete</a> 
            <a class="btn btn-primary btn-xs" href="<?php echo base_url('user/editt/'.$items->id_user); ?>"><i class="fa fa-pencil"></i> Update Password</a> 
            </td>
					</tr>
					<?php
				}
			?>

      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div>
</div>
<!-- /.box -->