<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login Pendataan Rumah Sakit</title>
    <meta charsetset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <h1 class="text-center">Halaman Login Pengguna</h1>
        <hr>
        <form action="loginproses.php" method="post"> 

            <ul>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </div><br>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </div><br>

                <button type="submit" name="login">login</button>

            </ul>
        </form>

</body>

</html>