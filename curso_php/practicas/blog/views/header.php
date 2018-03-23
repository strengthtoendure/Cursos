<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
</head>
<body>

  <header>
    <div class="contenedor">
      <div class="logo izquierda">
        <p><a href="#">BLOOOOOOOOOOOOG</a></p>
      </div>

      <div class="derecha">
        <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>buscar.php" method="get">
          <input type="text" name="busqueda" value="" placeholder="Buscar">
          <button type="submit" class="icono fa fa-search"></button>
        </form>
        <nav class="menu">
          <ul>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#">Contacto <i class="icono fa fa-envelope"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
