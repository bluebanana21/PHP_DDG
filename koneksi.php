<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_ddg');

if ($koneksi) {
    
} else {
    echo $koneksi->error;
}
?>