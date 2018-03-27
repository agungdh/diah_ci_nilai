<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH DATA SEMESTER</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('semester/tambah_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
    <div class="row">
       <input type="hidden" class="form-control" id="id_semester" placeholder="Masukkan Semester" name="id_semester" required="required">
       </div>
    <div class="form-group">
      <label for="semester">Semester</label>
          <input type="text" class="form-control" id="semester" placeholder="Masukkan Semester" name="semester" required="required" maxlength="10">
    </div>        
    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('semester'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#semester").val()) === ""|| $.trim($("#tahun_ajaran").val()) === "" ) {
        alert('Data masih kosong !!!');
    return false;
    }
});

function hanyaangka(evt){

var charCode = (evt.which) ? evt.which : event.KeyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;

}
</script>