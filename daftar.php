<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<?php
include "konektor.php";
?>
<h1>Pendaftaran</h1>
<form class="form form-group" method="post" action="tambah.php">
	Nama : <br>
<input type="text" name="nama" /><br />
	Umur : <br>
<input type="text" name="umur" /><br />
	Kota : <br>
<input type="text" name="kota" /><br />
	Hoby : <br>
<input type="text" name="hoby" /><br><br>    
<input type="submit" class="btn btn-group" value="Tambah" id="tambah" name="tambah" />
</form>
    
    <div class="footer">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2016 Sevanam Enterprise. <a class="mbr-footer__link text-gray" href="#">Terms of Use</a>  | <a class="mbr-footer__link text-gray" href="#">Privacy Policy</a></p>
            </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>