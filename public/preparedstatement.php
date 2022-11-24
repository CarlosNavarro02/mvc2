<?php
    $dsn = "mysql:dbname=demo;host=db"; 
    $usuario = "dbuser";
    $password = "secret";
    /*
        1:Prepara la consulta ->prepare
        2:VIncular los datos -> bindParam / bindValue
        3:Ejecutar la sentencia -> execute();(query , exec)
    */
    try {
        $db = new PDO($dsn,$usuario,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Preparacion por nombre
       // $sentencia = $db->prepare("INSERT INTO Credenciales (nombreusu,password) VALUES(:nombre,:clave)");

       //Preparacion por posicion
        $sentencia = $db->prepare("INSERT INTO Credenciales (nombreusu,password) VALUES(?,?)");
        $nombre = "Juan";
        $clave1 = "1234";

        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$clave1);   

       // $sentencia->bindValue(":nombre",$nombre);
        //$sentencia->bindValue(":clave",$clave1);
        $sentencia->execute();
        echo "Exito";
    } catch (PDOException $e) {
        echo "Error producido al conectar " . $e->getMessage();
    }