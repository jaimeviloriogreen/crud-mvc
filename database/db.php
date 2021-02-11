<?php 
class Conexion{
    public static function conectar(){
        $mysqli = new mysqli("127.0.0.1", "root", "", "vehiculos-crud");
        return $mysqli;
    }
}
