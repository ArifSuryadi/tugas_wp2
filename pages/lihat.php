<!DOCTYPE 
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>PT.Surya Dirgantara</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
  <div class="wrapper col1">
    <div id="header">
      <div id="topnav">
        <ul>
          <li><a href="./logout.php">LOGOUT</a></li>
          <li class="active"><a href="lihat.php">TAMPIL DATA KARYAWAN</a></li>
          <li><a href="input.php">INPUT DATA KARYAWAN</a></li>
          <li><a href="../homeadmin.php">Home</a></li>
        </ul>
      </div>
      <div class="fl_left">
        <h3><a href="../homeadmin.php">PT.Surya Dirgantara</a></h3>
      </div>
      <br class="clear" />
    </div>
  </div>
  <html>
  <body>
    <table width="10" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="green">
      <tr>
        <td height="40" align="center" bgcolor="black"><strong></strong>
          <h2><strong><font color="yellow"> DATA KARYAWAN</font></strong></h2></td>
        </tr>
        <tr>
          <td bgcolor="white"><table width="600" border="0" align="left" cellpadding="3" cellspacing="0">
          </td>
        </tr>
      </table>
    </head>
    <body>
      <table border="1" width="100%">
       <tr>
         <th>NIK</th>
         <th>Nama Lengkap</th>
         <th>Jenis Kelamin</th>
          <th>Divisi</th>
         <th>Alamat</th>
        
         <th>Agama</th>
         <th>Status</th>
         <th>No_Telephone</th>
         <th>Email</th>
         <th>Foto</th>$eeeeeee
         <th colspan="2">Aksi</th>
       </tr>
       <?php 
 // Load file koneksi.php  
       include "koneksi.php";  

$query = "SELECT * FROM tb_karyawan"; // Query untuk menampilkan semua data siswa  
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama']."</td>"; 
  echo "<td>".$data['jenis_kelamin']."</td>"; 
   echo "<td>".$data['divisi']."</td>";
  echo "<td>".$data['alamat']."</td>";
 
  echo "<td>".$data['agama']."</td>";
  echo "<td>".$data['status']."</td>";
  echo "<td>".$data['no_tlp']."</td>";
  echo "<td>".$data['email']."</td>"; 
  echo "<td><img src=../images/".$data['foto']." 'width='50' height='50'></td>"; 
  echo "<td><a href='edit.php?nik=".$data['nik']."'>Ubah</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>
</table>
</body>
<div class="introtext">
  <h2><center> PT.Surya Dirgantara</h2></center>
  <center>Dalam meraih kesuksesan, Kemauan Anda untuk sukses
    harus lebih besar dari ketakutan Anda akan kegagalan<a href="http://www.os-templates.com/"></a> <a href="http://www.os-templates.com/"></a>.</>
  </div>
  <li class="clear featured_slide_Image"> 
    <!-- Leave This Empty --> 
  </li>
</ul>
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <p class="right">Copyright &copy; 2018 - All Rights Reserved - <a href="#">PT.Surya Dirgantara</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>