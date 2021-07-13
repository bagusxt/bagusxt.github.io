<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['terbit_bk'];
$jenis = $_POST['jenis_bk'];
$harga = $_POST['harga_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , jenis_buku , harga_buku) VALUES('$judul' , '$penerbit' , '$jenis' , '$harga')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>