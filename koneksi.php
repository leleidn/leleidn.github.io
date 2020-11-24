<?php
$host="localhost";
$user="root";
$password="";
$db="leleidn";

$conn = mysqli_connect($host,$user,$password);
if ($conn){
	echo "<b>Berhasil</b> - Koneksi<br>";
}else {
	echo"<b>Gagal</b> - Koneksi<br>";
}

$result=mysqli_select_db($conn,$db);
if ($result){
	echo "Koneksi Berhasil - Database $db ";
}else {
	echo "Koneksi Gagal - Database $db ";
}
?>