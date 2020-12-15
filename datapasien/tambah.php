<?php
session_start();
require '../functions.php';
if( isset($_POST["submit"]) ) {


   if( tambah($_POST) > 0 ) {
       echo "
           <script>
               alert('data berhasil ditambahkan!');
               document.location.href = 'index.php';
           </script>
       ";
   } else {
       echo "
             <script>
               alert('data gagal ditambahkan!');
               document.location.href = 'index.php';
           </script> 
       ";
   }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data pasien</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body bgcolor="seagreen">
<div class="container">  
    <h1>Tambah data pasien</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <li>
        <div class="form-group">
      <label for="ruangan">Ruangan:</label>
      <input type="ruangan" class="form-control" id="ruangan" placeholder="Masukkan ruangan" name="ruangan">
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
    </div>
            </li>
            <li>
            <div class="form-group">
            <label fro="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar">
            </li>
            
            <button type="submit" name="submit">Tambah Data</button>
            </div>
            
        </ul>
        

    
    </form>



</body>
</html>