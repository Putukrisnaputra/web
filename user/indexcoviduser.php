<?php
session_start();

require '../functions.php';
$pasien = query("SELECT * FROM pasiencovid");

if( isset($_POST["cari"]) ) {
    $pasien = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman User Pasien COVID</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body bgcolor="green">

<h1 align="center">Daftar Pasien Terjangkit COVID-19</h1>
<br><br>

<a href="indexcoviduser.php" class="btn btn-dark">home</a><br><br>

<form action="" method="post">
      
    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form><br>

<table  class="table table-dark table-hover" border="1" cellpadding="10" cellspacing="0" >

<tr>
    <th>No.</th>
    <th>Ruangan</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Gambar</th>
   
</tr>

<?php $i = 1; ?>
<?php foreach( $pasien as $row ) : ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= $row["ruangan"] ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["alamat"] ?></td>
    <td><img src="../pasiencovid/img/<?= $row["gambar"]; ?>" width="50"></td>
    
</tr>
<?php $i++; ?>
<?php endforeach; ?>


</table>

<a href="logout.php" class="btn btn-primary">Logout</a>
</div>

</body>
</html>