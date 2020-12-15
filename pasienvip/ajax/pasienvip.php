<?php
require '../functions1.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM pasienvip
            WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' 
            ";
$pasien = query($query);

?>
<table  class="table table-dark table-hover" border="1" cellpadding="10" cellspacing="0" >

<tr>
    <th>No.</th>
    <th>Aksi</th>
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
    <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
        return confirm('apa anda yakin?');">hapus</a>
    </td>
    <td><?= $row["ruangan"] ?></td>
    <td><?= $row["nama"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["alamat"] ?></td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>


</table>