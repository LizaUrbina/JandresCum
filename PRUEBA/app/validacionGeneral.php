<?php 

 session_start();

 if($_SESSION['ROL']=="ADMIN" || $_SESSION['ROL']=="CLIENTE")
 {

 }
 else
 {
 	header("Location:../indexLogin.php");
 }





?>