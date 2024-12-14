<?php 
	include ("conexion.php");
	session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Delgado Maldonado Marcelo German, Candela Pili Keller">
	<title>Piedras Lunares - Venta de Piedras Lunares</title>
	<link rel="stylesheet" href="piedras.css">
</head>
<body>
	<header>
		<div class="logoo">
			<a href="index.html"><img src="./imagenes/a.png" alt="Logo de Piedras Lunares"></a>
			<p class="moonshare">moonshare</p>
		</div>
		<nav>
			<ul>
				<?php 
					if (!$_SESSION) {

						echo '<li><a href="Encuesta.php">Encuesta</a></li> ';
						echo '<li> <a href="#productosid">Productos</a></li> ';
						echo '<li><a href="login.php">Login</a></li> ';
						echo '<li><a href="#contactoid">Contacto</a></li> ';

					}else {
						echo '<li><a href="Encuesta.php">Encuesta</a></li> ';
						echo '<li> <a href="#productosid">Productos</a></li> ';
						echo '<li><a href="cerrar_session.php">Log Out</a></li> ';
						echo '<li><a href="formulario.php">Cargar Producto</a></li> ';
						echo '<li><a href="tabla.php">Tabla</a></li> ';
						echo '<li><a href="#contactoid">Contacto</a></li> ';
						

					}
				?>
			
			</ul>
		</nav>
	</header>
	<main>
		<section class="presentacion">

				<h2>¡Bienvenidos a MoonShare!</h2>

					<p> Somos una empresa líder en la investigación y estudio de las fascinantes piedras lunares. En MoonShare, nos apasiona desentrañar los misterios y secretos que se esconden en estas preciosas gemas que han viajado desde la luna hasta la Tierra. Nuestro equipo de expertos científicos y gemólogos se dedica a analizar minuciosamente cada piedra lunar, explorando su composición química, propiedades físicas y energéticas. Una vez que hemos completado nuestras investigaciones, organizamos subastas exclusivas donde los entusiastas de las gemas y coleccionistas de todo el mundo pueden adquirir estas auténticas maravillas celestiales. En MoonShare, nos enorgullece conectar a personas apasionadas con estas piedras únicas que encierran la magia y la historia de la luna misma. ¡Únete a nosotros en esta emocionante exploración del universo lunar y descubre la belleza sin igual de las piedras lunares.</p>



		</section>
		<section class="productos" >
				<h2>Productos Disponibles</h2>
			<div class="columnas">
			<?php 
				$sql = "SELECT * FROM `productos`";
				$datos = mysqli_query($conexion, $sql);

				foreach ($datos as $dato) {
			?>

			
				<div class="columna">
					<a href="#"><img src="./piedras/<?php echo $dato['imagen'] ?>" alt="Piedra Lunar 4"></a>
					<a href="descripcion.php?id=<?php echo $dato ['id_producto'] ?>">ver más</a>
				</div>
			
			<?php } ?>
			</div>
		</section>
		<section class="contacto" id="contactoid">
			<div id="caja">¡Hablanos para consultar cualquier duda sobre las piedras lunares!</div>
			<h2>Contacto</h2>
			<form action="#">
				<input type="text" id="nombre" name="nombre" required placeholder="nombre">
				<input type="email" id="email" name="email" required placeholder="email">
				<textarea id="mensaje" name="mensaje" required placeholder="mensaje"></textarea>
				<input type="submit" value="Enviar">
			</form>
		</section>
	</main>
	<div id="contenedor">
		<div id="foto"></div>
		<div id="CEO">
			<p>CEO y programador German delgado </p>
		</div>

	</div>
	<footer>
		<div class="direccion">
			<p>Dirección: Avenida San Martín 3721 Buenos Aires Argentina</p>
			<p>Teléfono: +54(0296)988-32-92</p>
			<p>Email: info@piedraslunares.com</p>
		</div>
		<div class="redes-sociales">
			<a href="https://www.facebook.com/spacextechnologies"><img src="./imagenes/facebook.png" alt="Facebook"></a>
			<a href="https://twitter.com/SpaceX"><img src="./imagenes/pajarito.png" alt="Twitter"></a>
			<a href="https://www.instagram.com/spacex/"><img src="./imagenes/instagram.png" alt="Instagram"></a>
		</div>
		<div class="derechos-autor">
			<p>Derechos de Autor © 2021 - Piedras Lunares</p>
		</div>
	</footer>
</body>
</html>