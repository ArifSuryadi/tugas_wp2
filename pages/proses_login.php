<?php
include"koneksi.php"; 
include"fungsi.php"; 

$username = $_POST['username'];
$password = $_POST['password']; 
$login   = mysqli_query($koneksi, "select* from admin where username='$username' and password='$password'"); 
$row = mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $password)
{
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	header('location:index.php');

}
else
{
	msgbox ("Gagal Login","login.php");
}

?>
