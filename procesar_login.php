<?php
include_once("conexion.class.php");
 if(isset($_POST["bt_login"])){

        $con = new Conexion();
        $sql = "SELECT * FROM `user_info`";
        $resultado = $con->query($sql);
        if($resultado->num_rows > 0){
          while($row = $resultado->fetch_assoc()){
            /**
            * Comprobación de que los datos indicados son correctos.
            **/
              if(isset($_POST["user"]) && $_POST["user"] == $row['user_name']){
                if(session_status != PHP_SESSION_ACTIVE){
                  session_start();
                }
                 $_SESSION['user'] = $row['user_name'];
                if(isset($_POST["password"])){
                  if(password_verify($_POST["password"], $row["password"])){
                    include_once("ini_session.php");
                    header("Location: index.php");
                  }else{
                  echo "ERROR - Password incorrecta";
                  header("Refresh:2; url=login.php");
                  }
                }
              }else{
                  echo "ERROR - Nombre de usuario no válido";
                  header("Refresh:2; url=login.php");
              }
          }
        }
 }
?>
