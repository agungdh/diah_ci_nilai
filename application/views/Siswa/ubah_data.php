
<div class="box box-danger">
  <div class="box-header with-border">
    <h4><strong><font color=blue>UBAH DATA SISWA</font></strong></h4>
    <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
  </div><!-- /.box-header -->


  <!-- form start -->
  <form role="form" method="post" name="form" id="form" action="<?php echo base_url('siswa/update_data'); ?>" enctype="multipart/form-data">
  <div class="box-body">
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" class="form-control" id="nis" placeholder="" name="nis" required="required" maxlength="10" value="<?php echo $data_siswa->nis; ?>"> 
      </div>  

    <div class="form-group">
      <label for="nama">Nama Siswa</label>
       <input type="text" class="form-control" id="nama" placeholder="" required="required" name="nama" value="<?php echo $data_siswa->nama; ?>">
    </div> 
    <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" placeholder="" required="required" name="tanggal_lahir" value="<?php echo $data_siswa->tanggal_lahir; ?>">
        </div>
    <div class="form-group">
      <label for="alamat">Alamat Siswa</label>
          <input type="text" class="form-control" id="alamat" placeholder="" name="alamat" required="required" value="<?php echo $data_siswa->alamat; ?>">
    </div>
</div>
<div class="col-md-6">
  
    <div class="form-group">
      <label for="id_jurusan">Jurusan</label>
      <select name ="id_jurusan" type="text" class="form-control" >
      <option value="<?php echo $data_siswa->id_jurusan;?>"><P><?php echo $data_siswa->nama_jurusan;?></P></option>
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
          <input type="date" class="form-control" id="tanggal_masuk" placeholder="" required="required" name="tanggal_masuk" value="<?php echo $data_siswa->tanggal_masuk; ?>">
    </div>
     <div class="form-group">
      <label for="tanggal_skck">Masa Berlaku SKCK</label>
          <input type="date" class="form-control" id="tanggal_skck" placeholder=""  name="tanggal_skck" value="<?php echo $data_siswa->tanggal_skck; ?>">
    </div>
</div>
</div>
</div>
    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('siswa'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
