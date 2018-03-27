<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH DATA SEMESTER</font></strong></h4>
    <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Semester/update_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
      <div class="row">
  

              <input type="hidden" class="form-control" id="id_semester" placeholder="" name="id_semester" required="required" value="<?php echo $data_semester->id_semester?>">
                  </div>
              <div class="form-group">
              <label for="semester">Semester</label>
                  <input type="text" class="form-control" id="semester" placeholder="Masukkan Semester" name="semester" required="required" value="<?php echo $data_semester->semester ;?>">
              </div>  
    </div>
  <!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('semester'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div>


<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#semester").val()) === ""|| $.trim($("#tahun_ajaran").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});
</script>