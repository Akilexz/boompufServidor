<?php

include_once "conexion.php";

    // print_r($_GET);
    $datos=$_GET;

        $nombre=$datos['nombre'];
        $apellido=$datos['apellido'];
        $correo_electronico=$datos['correo_electronico'];
        $contrasena=$datos['contrasena'];
        
        print_r ($datos);
        
        $sql_agregar = "insert into persona (nombre,apellido,correo_electronico,contrasena) values ('$nombre','$apellido','$correo_electronico','$contrasena')";        
        // print_r ($sql_agregar);
        $sentencia_agregar=$pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($nombre,$apellido,$correo_electronico,$contrasena));
        // print_r($sentencia_agregar);
        if($sql_agregar){
            echo "guardado con exito";
        }

?>