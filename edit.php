<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

 <?php
include "konektor.php";
$id_user=$_POST['id_user'];
$query=mysql_query("select * from tb_useraktif where id_user='$id_user'");
?>
<form action="edit_data.php" method="post">
<table class="table table-condensed">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="id_user" value="<?php echo $id_user;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="nama" value="<?php echo $row['nama'];?>" /></td>
</tr>
<tr>
<td>Umur</td>
<td><textarea cols="20" rows="5" name="umur"><?php echo $row['umur'];?></textarea></td>
</tr>
<tr>
<td>Kota</td>
<td><textarea cols="20" rows="5" name="kota"><?php echo $row['kota'];?></textarea></td>
</tr>
<tr>
<td>Hoby</td>
<td><textarea cols="20" rows="5" name="hoby"><?php echo $row['hoby'];?></textarea></td>
</tr>
<tr><td><input type="submit" value="Simpan" name="simpan" /></td>
</tr>
<?php
}
?>
</table>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>