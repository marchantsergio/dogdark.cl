<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
class Conexion{
    public static function Conectar()
    {
        define('servidor','localhost');
        define('nombre_bd','dogdark');
        define('usuario','dogdark');
        define('password','Dogdark2017');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
            return $conexion;
        }catch (Exception $e){
            die("Error de conexion: ". $e->getMessage());
        }
    }
}