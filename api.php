<?php
include'koneksi.php';
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
$message = '';
$code = '';
$cek = mysqli_query($db,"SELECT * from siswa where id='$id'");
$cek2 = mysqli_query($db,"SELECT * from siswa");
// Evaluates as true because $var is set
if (!empty($id))
{
  $query = mysqli_query($db,"SELECT * from siswa where id='$id'");
  if (mysqli_num_rows($cek) > 0) {
    $code = 200;
    $message = "Show user data success";
    }else{
      $code = 204;
      $message = "User data not found"; 
    }
}else
{
  $query = mysqli_query($db,"SELECT * from siswa");
  if (mysqli_num_rows($cek2) > 0) {
    $code = 200;
    $msg = "Show user data success";
    }else{
      $code = 204;
      $message = "User data not found"; 
    }
};
//untuk menjalankan perinta sql
  $respon = array();
  $respon["success"] = true;
  $respon["data"] = array();
  $respon["message"] = $message;
  $respon["code"] = $code;
      while ($row = mysqli_fetch_assoc($query)) {
        # kerangka format penampilan data json
        $data['ID'] = $row["ID"];
        $data['Username'] = $row["Username"];
        $data['Password'] = $row["Password"];
        $data['Level'] = $row["Level"];
        $data['Fullname'] = $row["Fullname"];
        array_push($respon["data"], $data);
      }
  echo json_encode($respon);
?>