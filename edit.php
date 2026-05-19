<?php
$koneksi = mysqli_connect("localhost", "root", "", "projectbulia1");
$id=$_POST['id'];
$nama=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$query = mysqli_query($koneksi, "update produk set nama='$nama', harga='$harga', stok='$stok' where id='$id'");

if($query) {
    echo "Data Berhasil di edit";
} else {
    echo "Data gagal di edit";
}
?>