<?php 
    echo "<h2>Contenido en public </h2>";
    //require "../start.php";

    require "../Controller.php";
    $app = new Controller();
    $app->home();

    $app->show();