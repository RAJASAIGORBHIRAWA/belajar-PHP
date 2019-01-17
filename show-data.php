<?php 
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $result = $koneksi->query($sql);

    foreach($result as $result){
        $id = $result["id"];
        $nama = $result["nama"];
        $tersedia = $result["tersedia"];
        $umur = $result["umur"];
        $alamat = $result["alamat"];
        $email = $result["email"];


    }
?>