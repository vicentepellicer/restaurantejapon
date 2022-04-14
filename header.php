<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 colums-hd">
                <div class="logo">
                    <img src="assets/img/logo-rest.png" style="width: 118px;">
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 colums-hd">
                <nav>
                    <ul class="main-menu-1">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#dimsum-content">DIMSUM</a></li>
                        <li><a href="#ramen-content">RAMEN</a></li>
                        <li><a href="#carta">CARTA</a></li>
                        <li><a href="#form">RESERVAS</a></li>
                        <?php
                            /**
                            ** Comprobación de que la sesion esta iniciada.
                            **  En caso de que este iniciada se mostrará el boótn de Panel de Control.
                            ** Si la sesion no esta iniciada se le mostrará la opción de iniciar sesión.
                            **/
                            if (session_status() != PHP_SESSION_ACTIVE) {
                                session_start();

                                if(isset($_SESSION['user'])){
                                    echo'<li><a href="gestion.php">GESTIÓN</a></li>';
                                }else{
                                    echo'<li><a href="login.php">LOGIN</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </nav> 
            </div>
        </div>
    </div>
</header>