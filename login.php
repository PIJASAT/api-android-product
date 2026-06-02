<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
"SELECT * FROM users
WHERE username='$username'
AND password='$password'");

if(mysqli_num_rows($query)>0){

    $data = mysqli_fetch_assoc($query);

    echo json_encode([
        "status"=>"success",
        "role"=>$data['role']
    ]);

}else{

    echo json_encode([
        "status"=>"error"
    ]);

}