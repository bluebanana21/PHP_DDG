<?php
// $id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = new mysqli('localhost', 'root', '', 'db_ddg');
if ($koneksi){
    echo "berhasil";
} else{
    echo $koneksi->error;
}

$insert = $koneksi->query("INSERT INTO user
(id, nama, email, password)
values
($id, '$nama', '$email', '$password')
");

if ($insert){
    echo "insert data berhasil";
} else {
    echo "gagal insert data";
}
?>