<?php
include 'koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
$sql_update=("UPDATE siswa SET Username='$username', Password='$password', Level='$level', fullname='$fullname' WHERE Username='$username'");
mysqli_query($link,$sql_update)or die(mysqli_error($link));
echo '<script>
alert("Datamu Berhasil Diedit");
location="index.php?"
</script>';
?>