<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

$psn = query("SELECT * FROM pasien WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

   if( ubah($_POST) > 0 ) {
       echo "
           <script>
               alert('data berhasil diubah!');
               document.location.href = 'index.php';
           </script>
       ";
   } else {
       echo "
             <script>
               alert('data gagal diubah!');
               document.location.href = 'index.php';
           </script> 
       ";
   }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah data pasien</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body bgcolor="seagreen">
<div class="container">  
    <h1>Ubah data pasien</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $psn["id"]; ?>">

    
        <ul>
        <li>
        <div class="form-group">
      <label for="ruangan">Ruangan:</label>
      <input type="ruangan" class="form-control" id="ruangan" placeholder="Masukkan ruangan" name="ruangan" value="<?= $psn["ruangan"]; ?>">
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $psn["nama"]; ?>">
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $psn["email"]; ?>">
    </div>
            </li>
            <li>
            <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="<?= $psn["alamat"]; ?>">
    </div>
            </li>
            <li>
            <label fro="gambar">Gambar :</label> <br>
            <img src="img/<?= $psn['gambar']; ?>" width="60"> <br>
            <input type="file" name="gambar" id="gambar">
            </li>
            
            <button type="submit" name="submit">Tambah Data</button>
            </div>
            
        </ul>
        

    
    </form>



</body>
</html>