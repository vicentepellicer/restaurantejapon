<?php 
include_once("ini_session.php");

session_destroy();
header("Location:index.php");
 ?>