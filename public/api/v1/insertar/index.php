<?php
include_once('../conex/index.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Necesario para recibir parametros de Axios
$_POST = json_decode(file_get_contents("php://input"), true);

//recepcion de los datos enviados mediante $_POST desde el documento
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$dia = date('d');
$mes = date('m');
$ano = date('Y');

switch ($mes) {
    case '01':
        $mes = "Enero";
        break;
    case '02':
        $mes = "Febrero";
        break;
    case '03':
        $mes = "Marzo";
        break;
    case '04':
        $mes = "Abril";
        break;
    case '05':
        $mes = "Mayo";
        break;
    case '06':
        $mes = "Junio";
        break;
    case '07':
        $mes = "Julio";
        break;
    case '08':
        $mes = "Agosto";
        break;
    case '09':
        $mes = "Septiembre";
        break;
    case '10':
        $mes = "Octubre";
        break;
    case '11':
        $mes = "Noviembre";
        break;
    case '12':
        $mes = "Diciembre";
        break;
}

$fecha = $dia.' de '.$mes.' del '.$ano;
$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$contenido = (isset($_POST['contenido'])) ? $_POST['contenido'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
$seo = (isset($_POST['seo'])) ? $_POST['seo'] : '';
$autor = (isset($_POST['autor'])) ? $_POST['autor'] : '';

$hora = date('H').':'.date('i');

switch ($opcion) {
    case 1:
        
        $texto = strip_tags($contenido);
        $texto_corto = substr($texto, 0 , 200);
        $sha_titulo = hash("sha256", $titulo);
        preg_match('@src="([^"]+)"@', $contenido, $array);
        $imagen = array_pop($array);
        $consulta='INSERT INTO post(post_titulo, post_texto_corto, post_texto_largo, post_sha_titulo, post_autor, post_fecha, post_hora, post_categoria, post_imagen, post_seo, estado ) VALUES ( '.$titulo.', '.$texto_corto.', '.$contenido.', '.$sha_titulo.', '.$autor.', '.$fecha.', '.$hora.', '.$categoria.', '.$imagen.', '.$seo.', '.$estado.' )';
        
		$resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $id = $resultado->lastInsertId();
        

        echo json_encode($id);
        exit();
		break;
    break;
    
    default:
		echo json_encode("Error devolviendo datos");
	    exit();
	break;
}