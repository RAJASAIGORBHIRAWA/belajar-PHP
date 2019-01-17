<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        tersedia,
        umur,
        alamat,
        email
    ) VALUE
    (
        '1',
        'Rajasa Igor Bhirawa',
        'Semua Waktu',
        '16',
        'Jl. Danau Ranau G6B/2, Sawojajar',
        'rajasa.igor.25@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "insert completed!";
    } else {
        echo "insert failed!";
    }
?>