<?php 

if(isset($_GET["token"])){

	$item = "token";
	$valor = $_GET["token"];

	$usuario = ControladorFormulario::ctrSeleccionarRegistros($item, $valor);

}

?>

<div class="d-flex justify-content-center text-sm-center">
	<form class="p-5 bg-light" method="POST">
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user-alt"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Nombre" id="actualizarNombre" name="actualizarNombre">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Correo electrónico" id="actualizarEmail" name="actualizarEmail">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-unlock-alt"></i>
					</span>
				</div>
				<input type="password" class="form-control" placeholder="Password" id="pwd" name="actualizarPassword">
				<input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
				<input type="hidden" name="tokenUsuario" value="<?php echo $usuario["token"]; ?>">
			</div>
		</div>

		<?php

		$actualizar = ControladorFormulario::ctrActualizarRegistro();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			var datos = new FormData();
			datos.append("validarToken", "'.$usuario["token"].'");

			$.ajax({

				url: "ajax/formularios.ajax.php",
				method: "POST",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success:function(respuesta){

					$("#actualizarNombre").val(respuesta["nombre"]);	
					$("#actualizarEmail").val(respuesta["email"]);	
				}

			})

			</script>';

				echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';

			}

			if($actualizar == "error"){

				echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

				</script>';

				echo '<div class="alert alert-danger">Error al actualizar el usuario</div>';
			}
			?>
			<button type="submit" class="btn btn-outline-success">Actualizar</button>
		</form>
	</div>