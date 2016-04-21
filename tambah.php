  
<?php
$server="localhost"; ///nama server
$username="root"; ///nama username mysql
$password=""; ///password, kosongkan jika tidak ada
$database="db_lpd"; ///nama database yang dipilih

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$kota=$_POST['kota'];
$hoby=$_POST['hoby'];

///input ke tabel pengunjung
$input=mysql_query("INSERT INTO tb_useraktif (nama, umur, kota, hoby) VALUES ('$nama', '$umur', '$kota', '$hoby')");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil di Simpan </p> </center> </b> </font>   
  <meta http-equiv='refresh' content='2; url= Tampil.php'/>  "; 
}
else ///jika gagal
{
echo "Data gagal disimpan";
}
?>

