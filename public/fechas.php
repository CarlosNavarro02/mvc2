<?php

echo "<br> La hora es : " . time();
echo "<br> La hora es :" . strtotime("+1 month");

//fechas: date , DateTime

echo "<br> La fecha es :"  .date("d/F/y");

$fecha = new DateTime();
echo "<br><br>";

$fecha = new DateTime("+11 weeks");
var_dump($fecha);
echo "<br> INtento de fecha :" . $fecha->format("d/M/Y");