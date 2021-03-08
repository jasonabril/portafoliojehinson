<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="https://kit.fontawesome.com/429de3478e.js" crossorigin="anonymous"></script>
    <link rel="icon"  href="/images/icon.png">
    <title><?php echo $titulo;?></title>
</head>

<body id="<?php echo $pagina;?>">
<header>
    <div class="container">

        <nav class="navbar navbar-expand-md px-0">
            <button class="navbar-toggler mb-1" type="button" data-toggle="collapse"
                    data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse align-items-end" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto text-center">
                    <li class="nav-item mr-sm-5">
                        <a class="nav-link <?php echo $pagina == "inicio"? "active" : ""?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item mr-sm-5">
                        <a class="nav-link <?php echo $pagina == "sobre mi"? "active" : ""?>" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item mr-sm-5">
                        <a class="nav-link <?php echo $pagina == "proyectos"? "active" : ""?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item mr-sm-5">
                        <a class="nav-link <?php echo $pagina == "contacto"? "active" : ""?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a href="images/CV.pdf" target="_blank" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </nav>
    </div>
</header>
