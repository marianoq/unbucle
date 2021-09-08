<div class="d-flex justify-content-center text-sm-center">
<form class="p-5 bg-light" method="POST">
	<div class="form-group">
		<label for="email">Correo electrónico:</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="fas fa-envelope"></i>
				</span>
			</div>
			<input type="email" class="form-control" placeholder="Correo electrónico" id="ingresoEmail" name="ingresoEmail" required>
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
			<input type="password" class="form-control" placeholder="Password" id="ingresoPassword" name="ingresoPassword" required>
		</div>
	</div>
	<?php 

	$ingreso = new ControladorFormulario();
	$ingreso -> ctrIngreso();

	?>

	<button type="submit" class="btn btn-outline-primary">Ingresar</button>
</form>
</div>