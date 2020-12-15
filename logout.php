<?php 

session_start();
session_destroy();
echo"<script type='text/javascript'>alert('Logout Berhasil......!'); location.href=\"home.php\";</script>";

?>