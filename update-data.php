<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_user = $_POST["id_user"];
        $nama = $_POST["nama"];
        $tersedia = $_POST["tersedia"];
        $umur = $_POST["umur"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];

        $sql = "UPDATE user SET nama = '$nama' ,tersedia = '$tersedia' ,umur = '$umur' ,alamat = '$alamat' ,email = '$email' WHERE id = '$id_user' ";

        if($koneksi->query($sql) == TRUE){
            echo "Update Complete!";
        } else {
            echo "Update Fail!";
        }
    }
?>