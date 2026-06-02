<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
"INSERT INTO users(username,password,role)
VALUES('$username','$password','user')");

if($query){
    echo json_encode([
        "status"=>"success",
        "message"=>"Register berhasil"
    ]);
}else{
    echo json_encode([
        "status"=>"error",
        "message"=>"Register gagal"
    ]);
}