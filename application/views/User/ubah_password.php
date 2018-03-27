<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH PASSWORD</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('User/update_password'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">
    <input type="hidden" name="id_user" id="id_user" value="<?php echo $data_password->id_user; ?>">
 
    <div class="form-group">
      <label for="password">Masukkan Password Baru</label>
          <input type="password" class="form-control" id="password" required="required" placeholder="Masukkan Password Baru" name="password" >
    </div> 
</div>
<div class="col-md-6">
    <div class="form-group">
      <label for="ulangi_password">Ulangi Password</label>
       <input type="password" class="form-control" id="ulangi_password" required="required" placeholder="Isi Ulangi Password" name="ulangi_password">           
    </div>          
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

$('#form').submit(function() 
{
    if ( $.trim($("#password").val()) === "" || $.trim($("#ulangi_password").val()) === "" ) {
        alert('Data masih kosong !!!');
    return false;
    }

    if ($.trim($("#password").val()) != $.trim($("#ulangi_password").val()) ) {
        alert('Password tidak sama !!!');
    return false;
    }
});

</script>
