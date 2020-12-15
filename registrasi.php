<?php
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('pengguna berhasil di tambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
     <title>Halaman Registrasi Pengguna</title>
     <meta charsetset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
     <style>
         label {
             display: block;
         }
     </style>
</head>
<body>
<div class="container">

<h1>Halaman Registrasi Pasien</h1>

<form action="" method="post">

<ul>
    <li>
       <label for="username">username :</label>
       <input type="text" name="username" id="username">  
    </li>
    <li>
       <label for="password">password :</label>
       <input type="password" name="password" id="password">
    </li>
    <li>
       <label for="password2">konfirmasi password :</label>
       <input type="password" name="password2" id="password2">  
    </li><br>
    
    <button type="submit" name="register">Register</button>
    

</ul>

</form>

</body>
</html>