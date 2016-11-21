<?php 
 
include "koneksi.php"; 
 
$id_mobil= $_GET['Id_Mobil']; 

$query = "DELETE FROM mobil WHERE Id_Mobil='$id_mobil'"; 
$hasil = mysql_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="tabel.php";</script>';

?>