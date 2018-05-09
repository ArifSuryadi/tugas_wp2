<?php
include 'koneksi.php';
include 'fungsi.php';

$nik            = $_POST['nik'];
$nama           = $_POST['nama'];
$divisi        = $_POST['divisi'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
$no_tlp         = $_POST['no_tlp'];
$agama         = $_POST['agama'];
$status         = $_POST['status'];
$email         = $_POST['email'];
$foto		= $_FILES['foto']['name'];
$tmp        = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;

$path = "../images/".$foto;

if(move_uploaded_file($tmp, $path)){

$query="INSERT INTO tb_karyawan SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',divisi='$divisi',alamat='$alamat',no_tlp='$no_tlp',agama='$agama',status='$status',email='$email', foto='$foto'";
mysqli_query($koneksi, $query);

header("location:lihat.php");
}
?>