<?php 

session_start();
session_destroy();
echo"<script type='text/javascript'>alert('berhasil lagout'); location.href=\"login.php\";</script>";

?>