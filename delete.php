<?php
include 'koneksi.php';
$username = $_POST['Username'];
$sql_delete=("DELETE FROM siswa WHERE Username='$username'");
mysqli_query($link,$sql_delete)or die(mysqli_error($link));
echo '<script>
alert("Datamu Berhasil Diedit");
location="index.php?"
</script>';
?>