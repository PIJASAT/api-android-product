<?php

include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$total = $harga * $jumlah;

$cek = mysqli_query($koneksi,
"SELECT stok FROM produk WHERE nama_produk='$nama_produk'");

$data = mysqli_fetch_assoc($cek);

$stokSekarang = $data['stok'];

if($stokSekarang < $jumlah){
    echo "stok_habis";
    exit;
}

$query = mysqli_query($koneksi,
"INSERT INTO orders(nama_produk, harga, jumlah, total)
VALUES('$nama_produk','$harga','$jumlah','$total')");

$stokBaru = $stokSekarang - $jumlah;

mysqli_query($koneksi,
"UPDATE produk SET stok='$stokBaru'
WHERE nama_produk='$nama_produk'");

if($query){
    echo "success";
}else{
    echo "gagal";
}

?>