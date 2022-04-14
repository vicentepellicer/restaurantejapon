<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Mejor Ramen de Valencia | Ramen Japan Bar</title>
    <!-- BOOTSTRAP 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- STYLE AND FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-login.css">
    <link rel="stylesheet" href="assets/css/style-gestion.css">
    <!-- SCRIPTS JQUERY WEB -->
    <script type="text/javascript" src="assets/js/menuCarta.js"></script>
</head>
<body>
    <!--Conexión a la BD-->
    <?php include_once('conexion.class.php')?>
    <!--Inclusión del Header-->
    <?php include_once('header-login.php'); ?> 
    <!--Contenido de la Web-->
    <div class="container-fluid info-web">
        <div class="row">
            <div class="slide">
                <div class="japan-bar">
                    <?php
                            $con = new Conexion();
                            if(session_status() != PHP_SESSION_ACTIVE){
                                $sql = "SELECT * FROM `reservas`";
                                $resultado = $con->query($sql);
                                if($resultado->num_rows){
                                    while($row = $resultado->fetch_assoc()){
                                        if($row['hora_reserva'] < date('H:i:s')){
                                            echo'<script type="text/javascript">'
                                                .'$(document).ready(function(e){'
                                                    .'$("#reserva").css("border:1px solid #62f442;");'
                                                .'});'
                                                .'</script>';
                                        }
                                    }
                                }
                            }
                            // Función de elmininar publicacion SOLO ADMIN
                            $con = new Conexion();
                            if (isset($_GET["eliminar"])) {
                            $sql = "DELETE FROM reservas WHERE id = '".$_GET["eliminar"]."'";
                                if ($con->query($sql) === true) {
                                header("Refresh:2; url=index.php");
                                } else {
                                echo "Error borrando en la tabla: " . $con->error();
                                }
                            }
                            /**
                            ** Comprobación de que la sesion esta iniciada.
                            **  En caso de que este iniciada se mostrará el boótn de Panel de Control.
                            ** Si la sesion no esta iniciada se le mostrará la opción de iniciar sesión.
                            **/
                            if (session_status() != PHP_SESSION_ACTIVE) {
                                session_start();
                                $con = new Conexion();
                                if($_SESSION['user'] == 'eladiolb'){
                                    $sql = "SELECT * FROM `reservas` ORDER BY `día_reserva` DESC";
                                    $resultado = $con->query($sql);
                                    if($resultado->num_rows){
                                        while($row = $resultado->fetch_assoc()){
                                                echo "<br>"
                                                ."<div class='publicacion' id='reserva' value=".$row["id"]." style='border:1px solid white;width: 54%;margin-left: 24%;;'"
                                                    ."<hr>"
                                                    ."<span id='usuario'> Nombre: ".$row['nombre_cliente']."</span>"
                                                    ."<br>"
                                                    ."<span id='usuario'> Teléfono: ".$row['telefono']."</span>"
                                                    ."<br>"
                                                    ."<span id='fechas' style='font-style:italic;font-size:15px;'> Día de reserva: ".$row['día_reserva']."</span>"
                                                    ."<br>"
                                                    ."<span id='fechas' style='font-style:italic;font-size:15px;'> Hora de reserva: ".$row['hora_reserva']."</span>"
                                                    ."<br>"
                                                    ."<span id='fechas' style='font-style:italic;font-size:15px;'> Comentario: ".$row['comentario']."</span>"
                                                    ."<br>";
                                                    if(isset($_SESSION['user']) && $_SESSION['user'] == "eladiolb"){
                                                        echo '<b><a href="gestion.php?eliminar='.$row["id"].'">Eliminar</a></b>';
                                                    }
                                                echo "</div>";
                                        }
                                    }
                                }
                            }
                        ?>
                    <form action="cerr_session.php" method="post" enctype="multipart/form-data" class="cerrar">
                        <input type="submit" name="bt_cerrar" value="Cerrar" class="bt">
                    </form>
                </div>
            </div> 
        </div>
    </div>
    <!-- FOOTER -->
    <?php include_once('footer.php')?>
</body>
</html>