<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="description" content="Restaurante Reyna's Seafood, marisquería online.">
        <meta name="keywords" content="Paraules clau">
        <meta name="author" content="Bryan Tite">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
        <link href=<?=base_url."assets/css/bootstrap.min.css"?> rel="stylesheet">
        <link href=<?=base_url."assets/css/full_estil.css"?> rel="stylesheet" type="text/css" media="screen">
        
        <meta http-equiv="refresh" content="2000">
        
    </head>
    
    <body>

        <!-- Cabecera -->
    <header>

        <nav class="navbar navbar-expand-lg headerColor">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href=<?=base_url."producto/index"?>><img class="logo" src=<?=base_url."assets/images/img2/logo1.webp"?>></a>
                
                <div id="botones_tienda_smartphone">
                    <div id="login">
                    </div>
                    <a href=<?=base_url."usuario/sesion"?>><img src=<?=base_url."assets/images/iconos/sesion.svg"?> alt="Icono de sesión"></a>
                    <a href=<?=base_url."producto/mostrarCarrito"?>><img src=<?=base_url."assets/images/iconos/carrito.svg"?> alt="Icono del carrito"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav fuenteMenu1">
                    <li class="nav-item">
                        <a class="nav-link fuenteMenu2" aria-current="page" href=<?=base_url."producto/index"?>>INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fuenteMenu2" href=<?=base_url."producto/mostrarCarta"?>>CARTA</a>
                    </li>
                    <div id="botones_tienda_smartphone">
                        <li>
                            <?php if(isset($_SESSION["login"])) { ?>
                                    <div class="dropdown">
                                        <a class="nav-link nav-link-color dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $_SESSION["login"] ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li style="text-align: -webkit-center;"><a class="dropdown-item" href="<?= base_url."usuario/cerrarSesion" ?>">Cerrar sesión</a></li>
                                        </ul>
                                    </div>
                            <?php } ?>
                        </li>
                    </div>
                    </ul>
                </div>
                <div id="botones_tienda_escritorio">
                    
                    <?php if(isset($_SESSION["login"])) { ?>
                        <div id="login">
                            <div class="dropdown">
                                <a class="nav-link nav-link-color dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION["login"] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php if(isset($_SESSION["rol"]) && $_SESSION["rol"] === "root"){ ?>

                                    <li style="text-align: -webkit-center;"><a class="dropdown-item" href="<?= base_url."producto/panelAdmin" ?>">Panel admin</a></li>
                                <?php } ?>
                                    <li style="text-align: -webkit-center;"><a class="dropdown-item" href="<?= base_url."usuario/cerrarSesion" ?>">Cerrar sesión</a></li>
                                </ul>
                            </div>
                    </div>
                    <?php } else { ?>
                        <div id="noLogin">
                            <a href=<?=base_url."usuario/sesion"?> ><img src=<?=base_url."assets/images/iconos/sesion.svg"?> alt="Icono de sesión"></a>
                        </div>
                    <?php } ?>
                    
                    <a href=<?=base_url."producto/mostrarCarrito"?> ><img src=<?=base_url."assets/images/iconos/carrito.svg"?> alt="Icono del carrito"></a>
                </div>
            </div>
          </nav>
            
    </header>

    </body>
    <script src=<?=base_url."assets/js/bootstrap.bundle.min.js"?>></script>
</html>