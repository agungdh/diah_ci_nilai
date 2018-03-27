<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH DAFTAR NILAI MUTU</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('nilai_mutu/tambah_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
    <input type="hidden" id="id_mutu" name="id_mutu" >
    <div class="col-md-6">
        <div class="form-group">
          <label for="range_nilai">Range Nilai</label>
              <select class=" form-control" id="range_nilai" name="range_nilai" required="required">
                <option value="">Pilih Range Nilai</option>
                <option>80 - 100</option>
                <option>72 - 79</option>
                <option>65 -72</option>
                <option>55 - 64</option>
                <option>0 - 54</option>
              </select>
        </div>  
    </div>  

    <div class="col-md-6">
        <div class="form-group">
          <label for="nilai_mutu">Nilai Mutu</label>
              <select class="form-control" id="nilai_mutu" name="nilai_mutu" required="required">
                <option value=""> PILIH NILAI MUTU </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>
                <option> E </option>
                
              </select>
        </div>  
    </div>      

    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('nilai_mutu'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->

<script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#range_nilai").val()) === "" || $.trim($("#nilai_mutu").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});

</script>