<?php
    /* 
        Si no la url no especificada ningun controlador (recuros => asigno)
        uno por defecto => home
        -Si no la url no especifica ningun metodo => asigno por defecto : index  */

    class App  
    {
        function __construct() {
            if (isset($_GET["url"]) && !empty($_GET["url"])) {
                $url = $_GET["url"];
            }else {
                $url = "home";
            }
            // /product/show -> producto: recurso ; show : accion
            $arguments = explode('/',trim($url,'/'));
            $controllerName = array_shift($arguments); //product : ProductController
            $controllerName =  ucwords($controllerName) . "Controller";
            if (count($arguments)) {
                $method = array_shift($arguments);
            }else {
                $method = "index";
            }
            //Voy a cargar el contrlolador 
            $file = "../app/controllers/$controllerName" . ".php";
            if (file_exists($file)) {
                require_once $file;
                echo $file;
                
            }else {
                http_response_code(404);
                die("No encontrado");
            }
            $controllerObject = new $controllerName();
            if (method_exists($controllerObject,$method)) {
                $controllerObject->$method($arguments);
            }else {
                http_response_code(404);
                die("No encontrado");
            }
        }
        
    }
    