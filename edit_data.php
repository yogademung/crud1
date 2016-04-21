<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
include "konektor.php";
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$kota=$_POST['kota'];
$hoby=$_POST['hoby'];
$query=mysql_query("update tb_useraktif set nama='$nama', umur='$umur', kota='$kota', hoby='$hoby' where id_user='$id_user'");
if($query) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= Tampil.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

</body>
</html>