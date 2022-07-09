<?php
include('carrito.php');
include('templates/cabecera.php');
?>

<!-----------*****Formulario registro de usaurios****---------------------------------------------->
<div class="principalRegistro">

	<!---------------------FORMULARIO PARA REGISTRARSE--------------------------------------------->
	<form class="formRegistro" action="servicios/insertar.php" method="post">
		
		<h1>Autenticación</h1>
		<h3>DATOS PERSONALES</h3>
		<p>*Campos requeridos</p><br><br>

		<label>Usuario*</label>
		<input  name="name" type="text" placeholder="Usuario" required>

		<label>Correo electrónico*</label><br>
		<input  name="email" type="email" placeholder="email" required>



		<label>Contraseña*</label><br>
		<input  name="password" type="pass" placeholder="Contraseña" required>



		<input  type="submit" onclick=" return validar();" name="register">

	</form>







	<!--Formulario ¿YA ESTÁ REGISTRADO? -->


	<form class="formRegistro" action="servicios/validar.php" method="POST">

		<h2>¿YA ESTÁ REGISTRADO?</h2><br><br><br><br>


		<label>Usuario</label>
		<input class="caja-txt" type="text" name="user" placeholder="Usuario">



		<label>Contraseña</label><br>
		<input class="caja-txt" type="password" name="pasusu" placeholder="Contraseña">

		<p>
			<a href="#">¿Olvidó su contraseña</a>
		</p>

		<input class="btn-enviar" type="submit">
		<i class="lok fas fa-lock"></i>

		</input>

	</form>


</div>

<?php
include('templates/pie.php');
?>