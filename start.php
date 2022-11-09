<?php
  //  echo "<h2>Contenido Privado</h2>";

  /* /recurso/accion/parametro
        recurso: controladores
        accion: metodos del controladores
        parametros : find -> id de producto */

    require_once "../Controller.php";

    $app = new Controller();
    //defino variable de peticion en la url
    if (isset($_GET["method"])) {
        $method = $_GET["method"];
        $app->$method;
    }