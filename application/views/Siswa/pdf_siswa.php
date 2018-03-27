

<html>
<title>Daftar Siswa CAS</title>

 <style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
      background: silver;
  }
 
  </style>
</head>
<body>
  <table>
    <tr>
      <td><img src="logo.jpg" style="height: 65px; width: 85px; margin-right: 5px;"></td>
      <td>
       <strong><center><b>SMK CITRA ANGKASA SCHOOL</</center></strong>
        <center>Jl. Perwira No.21 Rajabasa Bandar Lampung Provinsi Lampung </center>
        <center>Telp. 0721-708889, E-mail: catpramugari@gmail.com, Website: www.sekolahpramugaricat.com</center>
        <br>
        <br>
      </td>
      <td><img src="logo.jpg" style="height: 65px; width: 85px; margin-left: 90px;"></td>
    </tr>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="bb" style="border: 2px solid black"></div> 
  <center><h3>DATA SISWA CAS</h3</center><br><br>
    <table>
      <thead>
        <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Tanggal Masuk</th>
        </tr>
      </thead>
      <br>
      <tbody>
        <?php $no=1; foreach ($data as $siswa) :?>
        <tr>
          <td align="center" style="border: 1px solid black;"><?php echo $no++; ?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->nis;?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->nama; ?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->tanggal_lahir; ?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->alamat; ?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->nama_jurusan;?></td>
          <td align="center" style="border: 1px solid black;"><?php echo $siswa->tanggal_masuk;?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div><!-- /.boxbody -->
</div><!-- /.box -->
</html>