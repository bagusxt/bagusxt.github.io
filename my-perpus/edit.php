<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$penerbit = $_GET['terbit_bk'];
$jenis = $_GET['jenis_bk'];
$harga = $_GET['harga_bk'];

//query update
$query = "UPDATE buku SET judul_buku='$judul' , penerbit_buku='$penerbit' , jenis_buku='$jenis' , harga_buku='$harga' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>