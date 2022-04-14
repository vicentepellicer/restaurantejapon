<?php
include_once("conexion.class.php");

  class Usuarios{
    protected $user;
    protected $password;
    protected $email;
    protected $phone;

    public function __construct($user, $password, $email, $phone){
      $this->user = $user;
      $this->password = $password;
      $this->email = $email;
      $this->phone = $phone;
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

        public function insertarUsuario(){
          $con = new Conexion();

          $sql = "INSERT INTO `user_info`(`user_name`, `phone`, `password`, `email`)
        		VALUES (
        			'".$this->user."'
        			,'".$this->phone."'
              ,'".$this->password."'
              ,'".$this->email."'
              );";

        		if ($con->query($sql) === true){
        			echo "Usuario registrado correctamente";
              header("Refresh:2;url=login.php");
        		}else {
        			echo "ERROR - Este usuario ya existe.";
              header("Refresh:2;url=registrar_usuarios.php");

        		}
        }
      }
 ?>