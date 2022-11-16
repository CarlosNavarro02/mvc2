<?php
namespace Dwes\Galaxias\Pegaso;
const RADIO = 1.25;
function observar($mensaje)
{
    echo "Estoy mirando otra galaxias" . $mensaje;
}
class Galaxia {
    function __constructI() {
        $this->nacimiento();
    }
    function nacimiento()
    {
        echo "<brSoy una nueva Galaxia Nueva";
    }
    static function muerte()
    {
        echo "<br> Destruyendo !!";
    }
}