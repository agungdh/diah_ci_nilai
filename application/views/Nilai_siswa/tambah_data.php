<div class="box box-primary">
  <div class="box-header with-border">
    <h4><strong><font color=blue>TAMBAH NILAI HARIAN SISWA</font></strong></h4>
  </div><!-- /.box-header -->


  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('Nilai/tambah_data'); ?>" enctype="multipart/form-data" >
    <div class="box-body">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
                <label for="nis">Nama Siswa</label>
                  <select name ="nis" type="text" class="form-control select2" style="width: 100%;">
                  <option><P>Pilih Nis dan Nama Siswa</P></option>
                  <?php
                  mysql_connect("localhost", "root","");
                  mysql_select_db("db_nilai");
                  $sql =mysql_query("SELECT * FROM data_siswaa order by nis ASC");
                  if (mysql_num_rows($sql) !=0){
                    while ($data = mysql_fetch_assoc($sql)) {
                      echo '<option value='.$data["nis"].'>'.$data['nis'].' '.$data['nama'].'</option>';
                    }
                  }
                  ?> 
                  </select>           
         
              </div>
    <div class="form-group">
       <label for="id_kelas">Kelas</label>
                  <select name ="id_kelas" type="text" class="form-control select2" style="width: 100%;">
                  <option><P>Pilih Kelas</P></option>
                  <?php
                  mysql_connect("localhost", "root","");
                  mysql_select_db("db_nilai");
                  $sql =mysql_query("SELECT * FROM tb_kelas order by id_kelas ASC");
                  if (mysql_num_rows($sql) !=0){
                    while ($data = mysql_fetch_assoc($sql)) {
                      echo '<option value='.$data["id_kelas"].'>'.$data['nama_kelas'].'</option>';
                    }
                  }
                  ?> 
                  </select>           
         
      </div>

    <div class="form-group">
      <label for="kode_mapel">Mata Pelajaran</label>
      <select name ="kode_mapel" type="text" class="form-control select2" style="width: 100%;">
      <option><P>Pilih Mata Pelajran</P></option>
      <?php
      mysql_connect("localhost", "root","");
      mysql_select_db("db_nilai");
      $sql =mysql_query("SELECT * FROM tb_mapel order by kode_mapel ASC");
      if (mysql_num_rows($sql) !=0){
        while ($data = mysql_fetch_assoc($sql)) {
          echo '<option value='.$data["kode_mapel"].'>'.$data['nama_mapel'].'</option>';
        }
      }
      ?> 
      </select>           
    </div>
         <div class="form-group">
      <label for="id_semester">Semester</label>
      <select name ="id_semester" type="text" class="form-control select2" style="width: 100%;">
      <option><P>Pilih Semester</P></option>
      <?php
      mysql_connect("localhost", "root","");
      mysql_select_db("db_nilai");
      $sql =mysql_query("SELECT * FROM tb_semester order by id_semester ASC");
      if (mysql_num_rows($sql) !=0){
        while ($data = mysql_fetch_assoc($sql)) {
          echo '<option value='.$data["id_semester"].'>'.$data['semester'].'</option>';
        }
      }
      ?> 
      </select>      
      </div> 
      </div>       
      <div class="col-md-6">
      <div class="form-group">
      <label for="kategori_nilai">Kategori Nilai</label>
         <select name="kategori_nilai" id="kategori_nilai" class="form-control" >
              <option> Masukkan Kategori Nilai </option>
              <option value="nilai1">Nilai Harian 1</option>
              <option value="Nilai2">Nilai Harian 2</option>
              <option value="MID">Nilai MID Semester</option>
              <option value="nilai3">Nilai Harian 3</option>
              <option value="nilai4">Nilai Harian 4</option>
              <option value="UAS">Nilai UAS</option>
         </select>
     </div>
      <div class="form-group">
      <label for="nilai">Nilai</label>
          <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" name="nilai" required="required">
      </div>
      <div class="form-group">
      <label for="tahun_ajar">Tahun Ajaran</label>
          <input type="text" class="form-control" id="tahun_ajar" placeholder="Masukkan Tahun Ajaran Siswa" name="tahun_ajar" required="required">
      </div>
      </div>
    </div>
      </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('nilai'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div><!-- /.box -->
