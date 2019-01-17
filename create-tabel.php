<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama varchar(50),
        tersedia varchar(50),
        umur int,
        alamat varchar(50),
        email varchar(50)
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Tabel Created!";
    } else {
        echo "Tabel Failed!";
    }
?>