<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
  while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $ruangan = $data["ruangan"];
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];

    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

     $query = "INSERT INTO pasienvip
                VALUES
              ('', '$ruangan', '$nama', '$email', '$alamat', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
               alert('pilih gambar terlebih dahulu!');
               </script>";
        return false;
    }
    
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
               alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    if( $ukuranFile > 1000000 ) {
        echo "<script>
               alert('ukuran gambar terlalu besar!');
               </script>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pasienvip WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {

        global $conn;

        $id = $data["id"];
        $ruangan = $data["ruangan"];
        $nama = $data["nama"];
        $email = $data["email"];
        $alamat = $data["alamat"];
        $gambarLama = $data["gambarLama"];

        if( $_FILES['gambar']['error'] === 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }
        
    
         $query = "UPDATE pasienvip SET
                     ruangan = '$ruangan',
                     nama = '$nama',
                     email = '$email',
                     alamat = '$alamat',
                     gambar = '$gambar'
                    WHERE id = $id
                  
                  ";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);    

}

function cari($keyword) {
    $query = "SELECT * FROM pasienvip
               WHERE
              nama LIKE '%$keyword%' OR
              email LIKE '%$keyword%' 
              ";
    return query($query);
}
?>