<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH DATA KELAS</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Kelas/tambah_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">

    <div class="form-group">
      <label for="nama_kelas">Kelas</label>
          <input type="text" class="form-control" id="nama_kelas" placeholder="Masukkan Kelas" name="nama_kelas" required="required" maxlength="5">
          </div>        

    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('kelas'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#nama_kelas").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});

</script>