<?php
header('Content-Type: application/json');
$koneksi = mysqli_connect("localhost", "root", "", "projectbulia1");
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$query = "insert into produk(nama, harga, stok) values ('$nama', '$harga', '$stok')";
if (mysqli_query($koneksi, $query)) {
    echo "Success"; 
}else {
    echo "Error";
}
?>