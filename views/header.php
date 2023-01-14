<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css" >
    <title>Blog - PHP</title>
</head>
<body>
    <header>
        <div class="contenedor">
        <div class="logo izquierda">
                <p>
                    <a href="<?php echo RUTA; ?>">Mi primer blog</a>
                </p>
            </div>
            <div class="derecha">
                <form class="buscar" name="busqueda" action="<?php echo RUTA; ?>buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono">Buscar</button>
                </form>
                <nav class="menu">
                    <li><a href="https://github.com/gabrieljgamezr">Github</a></li>
                    <!-- <li><a href="#">Contacto</a></li> -->
                </nav>
            </div>
        </div>
    </header>