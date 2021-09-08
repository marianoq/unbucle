<div class="d-flex justify-content-center text-sm-center">
<form class="p-5 bg-light" method="POST">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="fas fa-user-alt"></i>
				</span>
			</div>
			<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="registroNombre">
		</div>
	</div>

	<div class="form-group">
		<label for="email">Correo electrónico:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="fas fa-envelope"></i>
				</span>
			</div>
			<input type="email" class="form-control" placeholder="Correo electrónico" id="email" name="registroEmail">
		</div>
	</div>

	<div class="form-group">
		<label for="psw">Password:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="fas fa-unlock-alt"></i>
				</span>
			</div>
			<input type="password" class="form-control" placeholder="Password" id="pwd" name="registroPassword">
		</div>
	</div>
	<?php 

	$registro = ControladorFormulario::ctrRegistro();

	if($registro == "ok"){
		echo '<script>
			if (window.history.replaceState){
				window.history.replaceState(null, null, window.location.href);
			}

		</script>';
		echo '<div class="alert alert-success">El usuario se ha registrado</div>';
	}

	if($registro == "error"){
		echo '<script>
			if (window.history.replaceState){
				window.history.replaceState(null, null, window.location.href);
			}

		</script>';
		echo '<div class="alert alert-danger">Error, no se permiten caracteres especiales.</div>';
	}

	?>

	<button type="submit" class="btn btn-outline-success">Enviar</button>
</form>
</div>