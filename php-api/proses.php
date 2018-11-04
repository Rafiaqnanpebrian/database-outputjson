<?php

include("koneksi.php");


if(isset($_POST['daftar'])){

    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $fullname = $_POST['fullname'];
    
    
    $sql = "INSERT INTO siswa (Username,Password,Level,Fullname) VALUE ('$username', '$password', '$level', '$fullname')";
    $query = mysqli_query($link, $sql);

    
    if( $query ) {
        
        header('Location: index.php?status=sukses');
    } else {
        
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>