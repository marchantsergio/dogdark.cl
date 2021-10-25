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
$usuario = (isset($_POST['user'])) ? $_POST['user'] : '';
$password = (isset($_POST['pass'])) ? $_POST['pass'] : '';

$pass = hash("sha256", $password);
switch ($opcion) {
	case 1:
		$consulta='SELECT user_nombre, user_rol FROM usuarios WHERE user_nombre="'.$usuario.'" AND user_pass="'.$pass.'";';
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $blog = $resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($blog);
        exit();
		break;
	case 2:
		$consulta='SELECT * FROM post';
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $blog = $resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($blog);
        exit();
		break;
	case 3:
		$consulta='SELECT * FROM post ORDER BY id_post DESC';
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $blog = $resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($blog);
        exit();
		break;

	default:
		echo json_encode("Error devolviendo datos");
		exit();
		break;
}