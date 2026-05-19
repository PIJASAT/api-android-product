<?php
header('Content-Type: application/json');
$koneksi = mysqli_connect("localhost", "root", "", "projectbulia1");
$data=array();
$query = mysqli_query($koneksi, "select * from user");
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
echo json_encode($data);
?>