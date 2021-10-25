<?php
include_once('../conex/index.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Necesario para recibir parametros de Axios
$_POST = json_decode(file_get_contents("php://input"), true);

//recepcion de los datos enviados mediante $_POST desde el documento
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

//variables que recibimos desde el documento via post
//$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$contenido = (isset($_POST['contenido'])) ? $_POST['contenido'] : '';
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';

switch($opcion){
	case 1:
		$consulta="INSERT INTO post (titulo_post, articulo_post, categoria_post) VALUES ('$titulo','$contenido','$categoria')";
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        exit();
		break;
}