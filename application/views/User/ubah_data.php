<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH DATA USER</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('User/update_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">
<input type="hidden" class="form-control" id="id_user" placeholder="" name="id_user" value="<?php echo $data_user->id_user; ?>"> 
    <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="" name="nama" required="required" value="<?php echo $data_user->nama; ?>"> 
      </div> </div>
<div class="col-md-6">
    <div class="form-group">
      <label for="username">Username</label>
       <input type="text" class="form-control" id="username" placeholder="" required="required" name="username" value="<?php echo $data_user->username; ?>">          
    </div>
    </div><!-- /.box-body -->
    </div>

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('user'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">

// $('#form').submit(function() 
// {
//     if ($.trim($("#nama").val()) === "" || $.trim($("#username").val()) === "") {
//         alert('Data masih kosong !!!');
//     return false;
//     }

//     if ($.trim($("#password").val()) != $.trim($("#ulangi_password").val()) ) {
//         alert('Password tidak sama !!!');
//     return false;
//     }
// });
