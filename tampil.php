<?php
include ('konektor.php');
?>
<head>
<title>LPD Pecatu</title>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section>
<table class="table table-hover">    
<tr>  
	<th> ID User </th>
    <th> Nama </th>  
    <th> Umur </th>  
    <th> Kota </th>
    <th> Hoby </th>
    <th colspan="1"> Action </th>
   
    
</tr>  
  
<?php    
// Perintah untuk menampilkan data  
$queri="Select * From tb_useraktif" ;  //menampikan SEMUA data dari tabel siswa  
  
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
$id = $data['id'];  
 echo "      
        <tr>
		<td>".$data['id_user']."</td>
        <td>".$data['nama']."</td>  
        <td>".$data['umur']."</td>  
        <td>".$data['kota']."</td> 
		<td>".$data['hoby']."</td> 
        </tr>   
        ";  
}
  
?>  
  
</table>
<div>
<a href="edit.php?id_user=<?php echo $data['id_user']; ?>"><button class="btn btn-info">Edit</button></a>
<a href="daftar.php" target="_blank"><button class="btn btn-default">Tambah</button></a>
<a href="hapus.php" target="_blank"><button class="btn btn-danger">Hapus</button></a>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>