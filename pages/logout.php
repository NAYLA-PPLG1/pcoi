<?php 
 session_start();

 //hapus session
 session_destroy();

 header("Location: nav.php");
?>