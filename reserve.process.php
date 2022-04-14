<?php
include_once("reserve.class.php");

if(isset($_POST["bt_enviar"])){

  if(isset($_POST["name"])){
    $name = $_POST["name"];
  }

  if(isset($_POST["tel"])){
    $tel = $_POST['tel'];
  }

  if(isset($_POST["day"]) && ($_POST["day"]>=date('Y-m-d'))){
    $day = $_POST["day"];
  }else{
    header("Location:error-ins.php");
    exit();
  }

  if(isset($_POST["hora"]) && ($_POST["hora"]>"08:00:00" && $_POST["hora"]<"23:00:00")){
    $hora = $_POST["hora"];
  }else{
    header("Location:error-ins.php");
    exit();
  }

  if(isset($_POST["coment"])){
    $coment = $_POST["coment"];
  }

  $reserva = new Reserva($name, $tel, $day, $hora, $coment);
  $reserva -> insertarReserva();
}
?>
