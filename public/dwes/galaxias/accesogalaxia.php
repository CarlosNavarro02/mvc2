<?php
    namespace Dwes\Galaxias;

    echo "<br> Namespace actual :" . __NAMESPACE__;

    include "galaxia1.php";
    echo "<h2>Sin direccionamiento</h2>";
    echo "<br> Radio de la galaxia : " . RADIO;
    observar("Via Lactea");
    $gl = new Galaxia();
    Galaxia::muerte();

    //DIRECCION RELATIVA
    include "pegaso/pegaso.php";
    echo "<h2>Sin direccionamiento</h2>";
    echo "<br> Radio de la galaxia : " . Pegaso\RADIO;
    Pegaso\observar("Via Lactea");
    $gl = new Pegaso\Galaxia();
    Pegaso\Galaxia::muerte();

    //DIRECCION absoluta
    include "pegaso/pegaso.php";
    echo "<h2>Direccionamiento absoluta</h2>";
    echo "<br> Radio de la galaxia : " . \Dwes\Galaxias\Pegaso\RADIO;
    Pegaso\observar("Via Lactea");
    $gl = new Pegaso\Galaxia();
    Pegaso\Galaxia::muerte();



