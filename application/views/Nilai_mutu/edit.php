<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH DAFTAR NILAI MUTU</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('nilai_mutu/update_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">


    <input type="hidden" class="form-control" id="id_mutu" placeholder="" name="id_mutu" maxlength="10" value="<?php echo $nilai_mutu->id_mutu; ?>"> 

   
     <div class="col-md-6">
        <div class="form-group">
          <label for="range">Range Nilai</label>
              <select class=" form-control" id="range" name="range" required="required">
                <option value="<?php echo $nilai_mutu->range_nilai; ?>"><?php echo $nilai_mutu->range_nilai; ?></option>
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
                <option value="<?php echo $nilai_mutu->nilai_mutu; ?>"><?php echo $nilai_mutu->nilai_mutu; ?></option>
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
    if ($.trim($("#range").val()) === "" || $.trim($("#nilai_mutu").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});

</script>