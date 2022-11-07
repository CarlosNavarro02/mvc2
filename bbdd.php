<?php
    //mysql:dbname=<nombre_bbdd>;host=<ip 
    $sdn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $clave = "secret";

    try {
        $bd = new PDO($sdn,$usuario,$clave);
        $sql = "select nombreusu,password from Credenciales";
        $registro = $bd->query($sql);
        echo "<br> Numero de registro devueltos  :" . $registro->rowCount();
        if ($registro->rowCount() > 0) {
            foreach ($registro as $fila) {
                echo "<br> Nombre usuario : " .$fila["nombreusu"];
                echo "<br> Contraseña : " .$fila["password"];

            }
        }else {
            echo "<br> No se ha devuelto ninguna fila";
        }
    } catch (PDOException $e) {
        echo "Mensaje de la excepcion : " . $e->getMessage();
    }
   