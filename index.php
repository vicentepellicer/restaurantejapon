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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/resp-style.css">
    <!-- SCRIPTS JQUERY WEB -->
    <script type="text/javascript" src="assets/js/menuCarta.js"></script>
</head>
<body>
    <!--Conexión a la BD-->
    <?php include_once('conexion.class.php')?>
    <!--Inclusión del Header-->
    <?php include_once('header.php'); ?> 
    <!--Contenido de la Web-->
    <div class="container-fluid info-web">
        <div class="row">
            <div class="slide">
                <div class="japan-bar">
                    <img src="assets/img/logo-rest-rojo.png" alt="">
                    <h2>SOMETHING DIFFERENT, SOMETHING GOOD</h2>
                    <h1>EL MEJOR DIM SUM Y RAMEN DE TODA LA CIUDAD</h1>
                </div>
            </div> 
        </div>
    </div>
    <!--Contenido de DIV Japan Bar Ramen-->
    <div class="container-fluid">
        <div class="row">
            <div class="content">
                <div class="dim-sum" id="japan">
                    <h2 class="dim-sum-title">DIM SUM & RAMEN</h2>
                    <h2 class="street-food">STREET FOOD</h2>
                    <img src="assets/img/dimsum-2.jpg" alt="" class="img-dimsum-2">
                    <img src="assets/img/dimsum-3.jpg" alt="" class="img-dimsum-3">
                    <p class="lore-ipsum">Sí, te presentamos el mejor Dim Sum y Ramen de Valencia. Toda la esencia del Dim Sum y el Ramen en formato ‘street food’. Así que, si eres amante de la comida cantonesa y del ‘street food’, Ramen Japan Bar conquistará tu paladar con la fusión de los mejores productos y sabores de la gastronomía oriental elaborados artesanalmente y presentados en auténticas cestas de bambú.</p>
                    <br/>
                    <p class="lore-ipsum-2">Y todo ello en un escenario inmejorable, en el corazón de la ciudad de Valencia. Saca tu lado más ‘foodie’ y callejero en Ramen Japan Bar.</p>
                    <img src="assets/img/dimsum.png" class="img-dimsum">
                </div>
            </div>
        </div>
    </div>
    <!--Contenido de DIV Dim Sum-->
    <div class="container-fluid">
        <div class="row">
            <div class="content-2" id="dimsum-content">
                <div class="dim-sum">
                    <h2 class="dim-sum-title">DIM SUM</h2>
                    <h2 class="street-food-2">點心</h2>
                    <p class="lore-ipsum-3">El Dim Sum, traducido del cantonés como “tocar el corazón” proviene de la cocina china tradicional. Hablamos pues de un plato sabroso, diferente y ligero ideal para darse un capricho.</p>
                    <br/>
                    <p class="lore-ipsum-4">Y no es de extrañar pues se ha convertido en un referente culinario para los amantes de la variedad y combinación original de sabores. Cocinados al vapor puedes deleitarte con sus diferentes rellenos elaborados a mano y con productos de alta calidad.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Contenido de DIV Ramen-->
    <div class="container-fluid">
        <div class="row">
           <div class="content-3" id="ramen-content">
                <img src="assets/img/ramen.png" class="img-ramen" alt="">
                <div class="dim-sum">
                    <h2 class="dim-sum-title">RAMEN</h2>
                    <h2 class="street-food-2">拉面</h2>
                    <p class="lore-ipsum-3">El Ramen es un plato japonés nacido de la fusión con la gastronomía china que incluye caldo, fideos y diferentes ingredientes. Una delicia para paladares exquisitos, un espectáculo para la vista y uno de nuestros platos estrella.</p>
                    <br/>
                    <p class="lore-ipsum-4">Prepárate para sorber como un verdadero japonés porque el auténtico Ramen elaborado con infinito mimo ha llegado a Valencia.</p>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="carta" id="carta">
                <h2>NUESTRA CARTA</h2>
                <div class="nav">
                    <ul class="main-menu-2">
                        <li><a href="#carta" id="ramen-b">RAMEN</a></li>
                        <li><a href="#carta" id="dimsum-b">DIM SUM</a></li>
                        <li><a href="#carta" id="bebida-b">BEBIDAS</a></li>
                    </ul>
                </div>
                <div id="dimsum-food">
                    <div class="dimsum-eat">
                        <h3>DIM SUM</h3>
                        <p class="titulos">
                            <span class="titulo">BOX Nº1</span>
                            <span class="precio">5'30€</span>
                        </p>
                        <p>
                        <span>Hakao de Langostino</span>
                        <br/>
                        <span>Siu Mai de Ternera</span>
                        <br/>
                        <span>Xiao Long Bao</span>
                        <br/>
                        <span>Bao de Pato Asado con Boletus</span>
                        </p>
                        <p class="titulos">
                            <span class="titulo">BOX Nº2</span>
                            <span class="precio">5'30€</span>
                        </p>
                        <p>
                        <span>Kao de langostino, huevo y cebollino</span>
                        <br/>
                        <span>Kao de cerdo picante</span>
                        <br/>
                        <span>Kao de pollo y trufa</span>
                        <br/>
                        <span>Kao de cordero con curry rojo</span>
                        </p>
                    </div>
                </div>
                <div id="ramen-food">
                    <h3>RAMEN</h3>
                    <p class="titulos">
                        <span class="titulo">Special Ramen Japan Bar</span>
                        <span class="precio">7€</span>
                    </p>
                    <p class="titulos">
                        <span class="titulo">Curry Ramen</span>
                        <span class="precio">7€</span>
                    </p>
                    <p class="titulos">
                        <span class="titulo">Vegan Ramen (Veggie)</span>
                        <span class="precio">7€</span>
                    </p>
                </div>
                <div id="bebida-food">
                    <h3>BEBIDAS</h3>
                    <p class="titulos">
                        <span class="titulo">AGUA 33 CL</span>
                        <span class="precio">1,5€</span>
                    </p>
                    <p class="titulos">
                        <span class="titulo">REFRESCOS 33 CL</span>
                        <span class="precio">2€</span>
                    </p>
                    <p>
                        <span>Coca-Cola</span>
                        <br/>
                        <span>Coca-Cola Zero</span>
                        <br/>
                        <span>Fanta de Naraja</span>
                        <br/>
                        <span>Nestea</span>
                    </p>
                    <p class="titulos">
                        <span class="titulo">Cerveza</span>
                        <span class="precio">2€</span>
                    </p>
                    <p>
                        <span>Mahou Clásica</span>
                        <br/>
                        <span>Mahou 0,0%</span>
                        <br/>
                        <span>Radler Mahou</span>
                        <br/>
                        <span>Kao de cordero con curry rojo</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" class="formulario">
        <div class="row">
            <div class="contacto" id="form" style="color:black;">
                <form enctype="multipart/form-data" action="reserve.process.php" method="post">
                <h2>RESERVA TU PROXIMA COMIDA</h2>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 datos" >
                    <div class="info-datos">
                        <h4>DATOS DEL CLIENTE</h4>
                        <span class="name">Nombre<br/><input type="text" name="name" required></span>
                        <br/>
                        <span class="tel"> Teléfono<br/><input type="number" name="tel" required></span>
                        <br/>
                        <span class="fecha">Día de reserva<br/><input type="date" name="day" required></span>
                        <br/>
                        <span class="hora">Hora de Reserva<br/><input type="time" name="hora" required></span>
                
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 area">
                    <span class="coment">
                        <textarea class="comentario" cols="50" name="coment" rows="15" placeholder="Comentarios..."></textarea>
                    </span>
                </div>
                <input type="submit" name="bt_enviar" value="Reservar" class="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include_once('footer.php')?>
</body>
</html>