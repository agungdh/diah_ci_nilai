
<div class="box box-danger">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH DATA SISWA</font></strong></h4>
    <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
  </div><!-- /.box-header -->


  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Siswa/tambah_data'); ?>" enctype="multipart/form-data" >
    
  <div class="box-body">
      <div class="row">
      <div class="col-md-6">

      <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" required="required" maxlength="10" onkeypress="return hanyaangka(event)">
      </div>  

    <div class="form-group">
      <label for="nama">Nama Siswa</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Siswa" name="nama" required="required">
    </div> 
    <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Siswa" name="tanggal_lahir" required="required">
        </div>
    <div class="form-group">
      <label for="alamat">Alamat Siswa</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa" name="alamat" required="required">
    </div>
</div>
<div class="col-md-6">
   
    <div class="form-group">
      <label for="id_jurusan">Jurusan</label>
      <select name ="id_jurusan" type="text" class="form-control">
      <option><P>Pilih Jurusan</P></option>
      <?php
      mysql_connect("localhost", "root","");
      mysql_select_db("db_nilai");
      $sql =mysql_query("SELECT * FROM tb_jurusan order by id_jurusan ASC");
      if (mysql_num_rows($sql) !=0){
        while ($data = mysql_fetch_assoc($sql)) {
          echo '<option value='.$data["id_jurusan"].'>'.$data['nama_jurusan'].'</option>';
        }
      }
      ?> 
      </select>           
    </div>

  <div class="form-group">
      <label for="tanggal_masuk">Tanggal Masuk</label>
          <input type="date" class="form-control" id="tanggal_masuk" placeholder="Masukkan tanggal masuk" name="tanggal_masuk" required="required">
    </div>

     <div class="form-group">
      <label for="tanggal_skck">Masa Berlaku SKCK</label>
          <input type="date" class="form-control" id="tanggal_skck" placeholder="Masukkan tanggal skck">
    </div>
</div>
</div>
</div>
    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('siswa'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>


<script type="text/javascript">
function hanyaangka(evt){

var charCode = (evt.which) ? evt.which : event.KeyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
  return false;
  return true;

}
</script>
<!-- <script type="text/javascript"> -->

<!--  $('#form').submit(function() 
// {
//     if ($.trim($("#nis").val()) === ''|| $.trim($("#nama").val()) === ''||$.trim($("#tanggal_lahir").val()) === ''||$.trim($("#alamat").val()) === ''||$.trim($("#id_kelas").val()) === ''|| $.trim($("#id_jurusan").val()) === ''||$.trim($("#tanggal_skck").val()) === '' {
//         alert('Data Ko!!!');
//     return false;
//     }
// }); -->
