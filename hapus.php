<?php
$koneksi = mysqli_connect("localhost", "root", "", "projectbulia1");
$id=$_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$query = mysqli_query($koneksi, "delete from produk where id='$id'");
if($query) {
    echo "data berhasil di hapus";
} else {
    echo "data ga jadi di hapus";
}
?>