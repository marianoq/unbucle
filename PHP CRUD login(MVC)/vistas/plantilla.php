<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome -->
	<script src="https://kit.fontawesome.com/f981d7e67b.js" crossorigin="anonymous"></script>

	<!-- Iconos Fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- CSS -->
	<link rel="stylesheet" href="vistas/css/styles.css">

	<link rel="shortcut icon" href="vistas/img/ico.png" />
	<title>UnBucle</title>

</head>

<body>

	<!-- NAVBAR -->
	<nav class="nav navbar-dark bg-dark">
		<div class="container">
				<ul class="nav nav-justified py-2 nav-pills">
					<?php if (isset($_GET["pagina"])): ?>

						<?php if ($_GET["pagina"] == "registro"): ?>
							<li class="nav-item">
								<a class="nav-link active" href="registro">Registro</a>
							</li>	
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="registro">Registro</a>
							</li>
						<?php endif ?>

						<?php if ($_GET["pagina"] == "ingreso"): ?>
							<li class="nav-item">
								<a class="nav-link active" href="ingreso">Ingreso</a>
							</li>	
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="ingreso">Ingreso</a>
							</li>
						<?php endif ?>

						<?php if ($_GET["pagina"] == "inicio"): ?>
							<li class="nav-item">
								<a class="nav-link active" href="inicio">Inicio</a>
							</li>	
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="inicio">Inicio</a>
							</li>
						<?php endif ?>

						<?php if ($_GET["pagina"] == "salir"): ?>
							<li class="nav-item">
								<a class="nav-link active" href="salir">Salir</a>
							</li>	
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="salir">Salir</a>
							</li>
						<?php endif ?>
					<?php else: ?>
						<li class="nav-item">
							<a class="nav-link active" href="registro">Registro</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="ingreso">Ingreso</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="inicio">Inicio</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="salir">Salir</a>
						</li>
					<?php endif ?>
				</ul>	
		</div>
	</nav>

<!-- CONTENIDO -->
<div class="container-fluid">
	<div class="container py-5">
		<?php 
		if(isset($_GET["pagina"])){
			if($_GET["pagina"] == "registro" ||
				$_GET["pagina"] == "ingreso" ||
				$_GET["pagina"] == "inicio" ||
				$_GET["pagina"] == "editar" ||
				$_GET["pagina"] == "salir"){
				include "paginas/".$_GET["pagina"].".php";
		}else{
			include "paginas/error404.php";
		}
	}else{
		include "paginas/registro.php";
	}
	?>

</div>
</div>

<script src="vistas/js/script.js"></script>

<!-- FOOTER -->
<footer>
	<div class="container-fluid bg-dark">
		<div class="redes-sociales">
			<div class="contenedor-icono">
				<a href="#" target="_blank" class="twitter">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
			<div class="contenedor-icono">
				<a href="#" target="_blank" class="facebook">
					<i class="fab fa-facebook-f"></i>
				</a>
			</div>
			<div class="contenedor-icono">
				<a href="#" target="_blank" class="instagram">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
		<div class="row text-center text-white">
			<div class="col ml-auto">
				<p>Copyright &copy; 2021 | UnBucle</p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>