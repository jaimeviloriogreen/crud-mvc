<?php

class VehiculosController{
    function __construct(){
        // Invocamos el modelo
        require_once("models/VehiculosModel.php");
    }
    public function Index(){
            $vehiculos = new VehiculosModel();
            $datos["titulo"] = "Vehículos";
            $datos["vehiculos"] = $vehiculos->getVehiculos();
        require_once("views/vehiculos.php");
    }
    
    public function NuevoVehiculo(){
        $datos["titulo"] = "Vehículos";
        require_once("views/vehiculo_nuevo.php");
    }
    
    public function GuardarVehiculo(){
        extract($_POST);
        $vehiculos = new VehiculosModel();
        $vehiculos->insertVehiculos($placa, $marca, $modelo, $fecha, $color);
        header('location:/MVC-CRUD');
    }

    public function EliminarVehiculo(){
        $vehiculos = new VehiculosModel();
        $id = $_GET['id'];
        $vehiculos->deleteVehiculos($id);
        header('location:/MVC-CRUD');
    }

    public function ActualizarVehiculo($id){
        $vehiculos = new VehiculosModel();
        $datos["titulo"] = "Vehículos";
        $datos["vehiculos"] = $vehiculos->getVehiculoById($id);
        require_once("views/vehiculo_actualizar.php");
    }
    
    public function VehiculoActualizado(){
        extract($_POST);
        $vehiculos = new VehiculosModel(); 
        $vehiculos->updateVehiculos($id, $placa, $marca, $modelo, $fecha, $color);
        header('location:/MVC-CRUD');
    }
}
