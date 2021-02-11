<?php

class Route{
    private static function loadController($controller){
        $controller = strtolower($controller);
        $controller = ucfirst($controller);
    
        $name = $controller."Controller";
        $file = "controllers/" . $name . '.php';
    
        if(!file_exists($file)){
            $file = "controllers/" . MAINCONTROLLER . "Controller.php";
            require_once($file);
    
            $controll = MAINCONTROLLER . "Controller";
            return $controll;
        }
    
        require_once($file);
        $controll = $name;
    
        return $controll;
    
    }
    
    private static function loadAction($controller, $action){
        if(isset($action) && method_exists($controller, $action)){
            $controller = new $controller();
            $id = $_GET['id'] ?? $id = NULL;
            $controller->$action($id);
        }else{
            $action = MAINACTION;
            $controller = new $controller();
            $controller->$action();
        }
    }
    
    
    public static function LoadRouteControll(){
        if(isset($_GET['controller'])){
            $controll = self::loadController($_GET['controller']);
            
            if(isset($_GET['page'])){
                self::loadAction($controll, $_GET['page']);
            }else{
                self::loadAction($controll,MAINACTION);
            }
        }else{
            $controll = self::loadController(MAINCONTROLLER);
            self::loadAction($controll,MAINACTION);
        } 
    }
}