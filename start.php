<?php
  //  echo "<h2>Contenido Privado</h2>";
    
  /* /recurso/accion/parametro
        recurso: controladores
        accion: metodos del controladores
        parametros : find -> id de producto */
    require_once "../Controller.php";   

    $app = new Controller();
    //defino variable de peticion en la url

    /* -1 Recoger el metodo que pasan como parametro y di no
    especifican ninguna carga el metodo home */
    if (isset($_GET["method"])) {
        $method = $_GET["method"];
    }else {
        $method = "home";
    }

    /* -2 Verificar que el metodo introducido existe */
    if (method_exists($app, $method)) {
        $app->$method();
    }else {
        http_response_code(404);
        die("Metodo no encontrado");
    }

