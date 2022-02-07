<?php 

include('koneksi.php');

$id = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM contact WHERE id='$id'");

if($hapus)
	header('location: pesan-costumer.php');
else
	echo "Hapus data gagal";

 ?>