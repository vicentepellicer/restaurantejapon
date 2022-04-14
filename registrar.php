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
    <link rel="stylesheet" href="assets/css/style-login-resp.css">
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
                    <form action="procesar_registro.php" method="post" enctype="multipart/form-data" >
                        <span>Usuario</span>
                        <input type="text" name="user" class="usuario">
                        <span>Contraseña</span>
                        <input type="password" name="password" class="contraseña">
                        <span>Coreo Electrónico</span>
                        <input type="text" name="email" class="email">
                        <span>Teléfono</span>
                        <input type="int" name="phone" class="telefono">
                        <input type="submit" name="bt_regis" value="Registrar" class="bt">
                    </form>
                </div>
            </div> 
        </div>
    </div>
    <!-- FOOTER -->
    <?php include_once('footer.php')?>
</body>
</html>