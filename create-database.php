<?php
    include "koneksi.php";
    
    $sql = "CREATE DATABASE profile";

    if($koneksi->query($sql) === TRUE){
        echo "Database Created!";
    } else {
        echo "Database Failed!";
    }
?>