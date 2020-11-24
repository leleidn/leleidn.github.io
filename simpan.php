<?php
  include "koneksi.php";

  	$nama=$_POST['nama'];
	$catatan=$_POST['catatan'];
	$tanggal_kirim=$_POST['tanggal_kirim'];
	$tanggal_pemesanan=$_POST['tanggal_pemesanan'];
	$telepon=$_POST['telepon'];
	$alamat=$_POST['alamat'];
	$catatan_pesanan=$_POST['catatan_pesanan'];
	$menu1=$_POST['menu1'];
	$jumlah_menu1=$_POST['jumlah_menu1'];
	$menu2=$_POST['menu2'];
	$jumlah_menu2=$_POST['jumlah_menu2'];

  $mysqli  = "INSERT INTO pemesanan (nama, catatan, tanggal_kirim, tanggal_pemesanan, telepon, alamat, catatan_pesanan, menu1, jumlah_menu1, menu2, jumlah_menu2) VALUES ('$nama', '$catatan', '$tanggal_kirim', '$tanggal_pemesanan', '$telepon', '$alamat', '$catatan_pesanan', '$menu1', '$jumlah_menu1', '$menu2', '$jumlah_menu2')";

  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    header("location:index.php");
  } else {
    echo "Gagal!";
  }
  mysqli_close($conn);
?>