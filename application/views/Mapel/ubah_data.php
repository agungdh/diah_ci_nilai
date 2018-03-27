<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH DATA MATA PELAJARAN</font></strong></h4>
    <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Mapel/update_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
      <div class="row">
      <div class="col-md-6">

    <div class="form-group">
      <label for="kode_mapel">Kode Mata Pelajaran</label>
          <input type="text" class="form-control" id="kode_mapel" placeholder="Masukkan Kode Mata Pelajaran" name="kode_mapel" required="required" maxlength="5" onkeypress="return hanyaangka(event)" value="<?php echo $data_mapel->kode_mapel ;?>">
    </div>  

     <div class="form-group">
      <label for="nama_mapel">Mata Pelajaran</label>
          <input type="text" class="form-control" id="nama_mapel" placeholder="Masukkan Mata Pelajaran" name="nama_mapel" required="required" maxlength="50" value="<?php echo $data_mapel->nama_mapel?>">
    </div> 
    </div>   
<div class="col-md-6">
     <div class="form-group">
      <label for="kkm">KKM</label>
          <input type="text" class="form-control" id="kkm" placeholder="Masukkan KKM" name="kkm" required="required" maxlength="3" onkeypress="return hanyaangka(event)" value="<?php echo $data_mapel->kkm;?>">
    </div> 
    </div>       
      </div>
      </div>
  <!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('mapel'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div>


<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#kode_mapel").val()) === ""|| $.trim($("#nama_mapel").val()) === "" || $.trim($("#kkm").val()) === "") {
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