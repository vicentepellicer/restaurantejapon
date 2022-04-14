<?php
    include_once("usuario.class.php");

    if(isset($_POST["bt_regis"])){

        if(isset($_POST["user"])){
            $user = $_POST["user"];
        }

        if(isset($_POST["password"])){
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        }

        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }

        if(isset($_POST["phone"])){
            $phone = $_POST["phone"];
        }

        $usuario = new Usuarios($user, $password, $email, $phone);
        
        $usuario -> insertarUsuario();
    }

?>