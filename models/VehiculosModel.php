<?php 

class VehiculosModel{
    private $db; 
    private $vehiculos;

    function __construct(){
        $this->db = Conexion::conectar();
        $this->vehiculos = array();
    }

    public function getVehiculos(){
        $sql = "SELECT id, marca, modelo, color, fecha, placa FROM vehiculos";
        $mysql = $this->db;
        $resultado = $mysql->query($sql);

        while($fila = $resultado->fetch_assoc()){
            array_push($this->vehiculos, $fila);
        }

        return $this->vehiculos;
    }

    public function insertVehiculos($placa, $marca, $modelo, $fecha, $color){
        $mysql = $this->db;
        $sql = "INSERT INTO vehiculos(id, marca, modelo, color, fecha, placa) 
        VALUES(NULL, '$marca', '$modelo', '$color', '$fecha', '$placa')";

        $mysql->query($sql);
    }

    public function deleteVehiculos($id){
        $sql = "DELETE FROM vehiculos WHERE id = $id";
        $mysql = $this->db;
        $mysql->query($sql);
    }

    public function getVehiculoById($id){
        $sql = "SELECT id, marca, modelo, color, fecha, placa FROM vehiculos WHERE id = $id";
        $mysql = $this->db;
        $resultado = $mysql->query($sql);
        
        if($resultado){
            $this->vehiculos = $resultado->fetch_assoc();
            return $this->vehiculos;
        }
        
    }

    public function updateVehiculos($id, $placa, $marca, $modelo, $fecha, $color){
        $sql = "UPDATE vehiculos SET 
                placa = '$placa', marca = '$marca', modelo = '$modelo', 
                fecha = '$fecha', color = '$color' 
                WHERE id = $id";

        $mysql = $this->db;
        $mysql->query($sql);
    }
}

?>