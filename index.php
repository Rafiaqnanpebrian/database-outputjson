<h2>List siswa</h2>
<table border="1">
 <tr><th>NO</th><th>ID</th><th>Username</th><th>Password</th><th>Level</th><th>Fullname</th></tr>
 <?php
 include "koneksi.php";
 $data=mysqli_query($link,"SELECT * from siswa order by ID");
 if ($data === FALSE) {
 die(mysql_error());
 }
 $no=1;
 while($hasil=mysqli_fetch_array($data)){ 
 
 echo "<tr>
 <td>$no</td>
 <td>$hasil[ID]</td>
 <td>$hasil[Username]</td>
 <td>$hasil[Password]</td>
 <td>$hasil[Level]</td>
  <td>$hasil[Fullname]</td>
 </tr>";
 $no++;
 }
 ?>
</table>