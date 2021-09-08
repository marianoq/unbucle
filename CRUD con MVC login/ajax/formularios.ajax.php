<?php 

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelo.php";

#CLASE DE AJAX
class AjaxFormularios{
	#VALIDAR EMAL EXISTENTE
	public $validarEmail;

	public function ajaxValidarEmail(){

		$item = "email";
		$valor = $this -> validarEmail;

		$respuesta = ControladorFormulario::ctrSeleccionarRegistros($item, $valor);
		
		echo json_encode($respuesta);
	}

	#VALIDAR TOKEN
	public $validarToken;

	public function ajaxValidarToken(){

		$item = "token";
		$valor = $this -> validarToken;

		$respuesta = ControladorFormulario::ctrSeleccionarRegistros($item, $valor);

		echo json_encode($respuesta);
	}
}

#OBJETO DE AJAX QUE RECIBE LA VARIABLE POST
if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxFormularios();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxValidarEmail();
}

#OBJETO DE AJAX QUE VALIDA TOKEN
if(isset($_POST["validarToken"])){

	$valToken = new AjaxFormularios();
	$valToken -> validarToken = $_POST["validarToken"];
	$valToken -> ajaxValidarToken();
}