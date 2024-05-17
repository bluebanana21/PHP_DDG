<?php
// $id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = new mysqli('localhost', 'root', '', 'db_ddg');
if ($koneksi){
    echo "berhasil";
} else{
    echo $koneksi->error;
}

$insert = $koneksi->query("INSERT INTO user
(username, email, password)
values
('$username', '$email', '$password')
");

if ($insert){
    echo "insert data berhasil";
} else {
    echo "gagal insert data";
}
?>