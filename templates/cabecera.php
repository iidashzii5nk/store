<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3BPTATTOO</title>
	<link rel="stylesheet" type="text/css" href="css/stylef.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<?php
	error_reporting(0); // En el inicio de sesion quitar el error que dice variable de sesion no existe.
	?>

	<!--Menu -->
	<div class="contenedor">

		<header>
			<span class="nav-bar" id="btnMenu"><i class="fa-solid fa-align-justify"></i>Menu</span>

			<nav class="main-nav">
				<ul class="menu" id="menu">
					<li class="menu__item"><a href="index.php" class="menu__link"><i class="fa-solid fa-house"></i></a></li>
					<li class="menu__item container-submenu"><a href="#" class="menu__link submenu-btn">Picmentos<i class="fa-solid fa-chevron-down"></i></a>
						<ul class="submenu">
							<li class="menu__item"><a href="#" class="menu__link">Juan</a></li>
						</ul>
					</li>
					<li class="menu__item"><a href="#" class="menu__link">Maquinas</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Agujas</a></li>
					<li class="menu__item"><a href="mostrarCarrito.php" class="menu__link">CARRITO(<?php

																									/*empty vacio si el carrito esta vacio el operador ternario ?el 
				primer valor es si 0: el segundo valor es no // la funcion count= contar
                la cantidad de productos agregados*/
																									echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);

																									?>)
						</a></li>

					<!--Mostrar el usario logueado-->

					<li class="menu__item"><a href="formValidarsesion.php" class="menu__link">Iniciar sesion</a></li>


					<li class="menu__item"><a href="cerrarsesion.php" class="menu__link">Cerrar sesion</a></li>
					<li class="menu__item">
						<h2 class="menu__item"> <?php echo  $_SESSION['user'] ?></h2>
					</li>
				</ul>
			</nav>

		</header>