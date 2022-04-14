<?php
include_once("conexion.class.php");

  class Reserva{
    protected $name;
    protected $tel;
    protected $day;
    protected $time;
    protected $coment;

  public function __construct($name, $tel, $day, $time, $coment){
    $this->name = $name;
    $this->tel = $tel;
    $this->day = $day;
    $this->time = $time;
    $this->coment = $coment;
  }

  public function __get($propiedad){
    if(property_exists($this, $propiedad)) {
         return $this->$propiedad;
      }
  }

  public function __set($propiedad, $valor){
    if(property_exists($this, $propiedad)) {
    }
  }

  public function insertarReserva(){
    $con = new Conexion();

    $sql = "INSERT INTO `reservas`(`nombre_cliente`,  `telefono`, `día_reserva`, `hora_reserva`, `comentario`)
      VALUES (
        '".$this->name."'
        ,'".$this->tel."'
        ,'".$this->day."'
        ,'".$this->time."'
        ,'".$this->coment."');";

      if ($con->query($sql) === true){
        include_once("reserva-ok.php");
         header("Refresh:2;url=index.php");
      }
  }
}
?>
