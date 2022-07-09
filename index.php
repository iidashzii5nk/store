<?php

include('servicios/conexionPDO.php');
include('carrito.php');
include('templates/cabecera.php');
?>

<div class="slider">
	<ul>
		<li><img src="imagenes/1.jpg" alt=""></li>
		<li><img src="imagenes/2.jpg" alt=""></li>
		<li><img src="imagenes/3.jpg" alt=""></li>
	</ul>
</div>

<div class="productos">
	<?php
	$sentencia = $con->prepare("SELECT * FROM picmentos");
	$sentencia->execute();
	$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
	//print_r($listaProductos);//Es para obtener los productos y ver la estructura en array[]
	?>
	<?php foreach ($listaProductos as $producto) { ?>

		<div class="agregar_productos">
			<!-- Llama los datos marca nombre y precio-->
			<img src="<?php echo $producto['imagen'] ?>" title="<?php echo $producto['imagen'] ?>">
			<p><?php echo $producto['marca'] ?></p>
			<p><?php echo $producto['nombre'] ?></p>
			<h5>$<?php echo $producto['precio'] ?></h5>



			<form action="" method="post">
				<input type="hidden" name="id" id="id" value="<?php echo $producto['id'] ?>">
				<input type="hidden" name="marca" id="marca" value="<?php echo $producto['marca'] ?>">
				<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre'] ?>">
				<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio'] ?>">
				<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

				<input type="hidden" name="imagen" id="imagen" value="<?php echo $producto['imagen'] ?>">


				<button name="btnAccion" value="Agregar" type="submit">

					Agregar carrito

				</button>

			</form>



		</div>

	<?php } ?>
</div>


<?php
include('templates/pie.php');
?>