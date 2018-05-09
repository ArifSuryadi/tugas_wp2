<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <li><a href="./logout.php">LOGOUT</a></li>
        <li class="active"><a href="lihat.php">Lihat Data Karyawan</a></li>
        <li><a href="input.php">Input Data Karyawan</a></li>
        <li><a href="../homeadmin.php">Home</a></li>
      </ul>
    </div>
    <div class="fl_left">
      <h3><a href="../index.php">PT.Surya Dirgatara</a></h3>
    </div>
    <br class="clear" />
  </div>
</div>
<html>
<body>
  <table width="500" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="green">
    <tr>
      <td height="40" align="center" bgcolor="black"><strong></strong>
        <h2><strong><font color="yellow">FORM EDIT DATA KARYAWAN</font></strong></h2></td>
      </tr>
      <tr>
        <td bgcolor="white"><table width="600" border="0" align="left" cellpadding="6" cellspacing="0">
        </td>
      </tr>
    </table>

    <?php 
    include "koneksi.php";
    $nik = $_GET['nik'];
    $query_mysql = mysqli_query ($koneksi,"SELECT * FROM tb_karyawan WHERE nik='$nik'")or die(mysqli_error());
    $nomor = 0;
    while($data = mysqli_fetch_array($query_mysql)){
      ?>
      <form method="POST" action="proses_edit.php">   
        <table>
          <tr>
            <td>Nik</td>
            <td>
              <input type="text" name="nik" value="<?php echo $data['nik'] ?>">
            </td>         
          </tr> 
          <tr>
            <td>Nama</td>
            <td>
              <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
            </td>         
          </tr>
          <tr>
          <td>Jenis Kelamin</td>
          <td><select type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"> 
           <option value="">Pilih Gander</option>
           <option value="Laki-Laki">Laki-Laki</option>
           <option value="Permpuan">Permpuan</option></td>          
         </tr></select>
         <tr>
          <tr>
        <td>Divisi</td>
        <td><select type="text" name="divisi" value="<?php echo $data['divisi'] ?>"> 
         <option value="">Pilih Divisi</option>
         <option value="HUMAS">HUMAS</option>
         <option value="LOGISTIK">LOGISTIK</option>
         <option value="MARKETING">MARKETING</option>
       </select></td>          
     </tr> 
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>          
          </tr>
          <tr>
        <td>Agama</td>
        <td><select type="text" name="agama" value="<?php echo $data['agama'] ?>">
          <option value="">Pilih Agama</option>
          <option value="ISLAM">Islam</option>
          <option value="KATOLIK">Kristen</option>
          <option value="HINDU">Hindu</option>
          <option value="BUDHA">Budha</option>
        </select></td>          
      </tr>
          <td>Status</td>
          <td><select type="text" name="status" value="<?php echo $data['status'] ?>"> 
            <option value="">Pilih Status</option>
            <option value="Menikah">Menikah</option>
            <option value="Tidak Menikah">Tidak Menikah</option>
          </select>
        </td>          
      </tr>
          <td>Nomor Telephone</td>
          <td><input type="text" name="no_tlp" value="<?php echo $data['no_tlp'] ?>"></td>          
        </tr>
     <td>email</td>
     <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>          
   </tr>
   <tr>
    <td>Foto</td> 
    <td>
      <input type="file" name="foto">
    </td>
  </tr> 

  <tr><td colspan="2"><button type="submit" value="proses_edit.php">SIMPAN</button></td></tr>       
</tr>       
</table>
</form>
<?php } ?>
</body>
</html>
<div class="introtext">
  <h2><center> PT.Surya Dirgantara</h2></center>
  <center>Dalam meraih kesuksesan, Kemauan Anda untuk sukses
    harus lebih besar dari ketakutan Anda akan kegagalan<a href="http://www.os-templates.com/"></a> <a href="http://www.os-templates.com/"></a>.</>
  </div>
  <li class="clear featured_slide_Image"> 
  </li>
</ul>
</div>
</div>

<div class="wrapper col5">
  <div id="footer">
    <p class="right">Copyright &copy; 2018 - All Rights Reserved - <a href="#">PT.Surya Dirgantara</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>