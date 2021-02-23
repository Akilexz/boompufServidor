<?php

session_start();
include_once "conexion.php";

$datos=$_GET;

$correo_electronico=$datos['correo_electronico'];
$contrasena=$datos['contrasena'];

// if(!empty($_GET[$correo_electronico]) && !empty($_GET[$contrasena])){
    $sql="select * from persona where correo_electronico = '$correo_electronico'";
    // $records->bindParam('correo_electronico', $_GET[$correo_electronico]);
    $getpersona= $pdo->prepare($sql);
    $getpersona->execute();
    $respuesta=$getpersona->fetchAll();
    // print_r ($respuesta);
    if($respuesta != Array()){
        if($correo_electronico==$respuesta[0][3] && $contrasena==$respuesta[0][4]){
            echo('accedido');
        }else{
            echo('No accedido');
        }
    }else{
        echo('No accedido');
    }
    // print_r($respuesta[0][3]);
        // $sql= 'select * from persona';
    // $gsent=$pdo->prepare($sql);
    // $gsent->execute();

    // $resultado=$gsent->fetchAll();

    // print_r ($resultado);
    // print_r($records);
    // $resultados = $records->fetch(PDO::FETCH_ASSOC);
    // print_r($correo_electronico);
    // print_r($contrasena);
    // if($correo_electronico==)
    // print_r($records);
    // print_r($resultados);
    // $numero=count($resultados);
    // print_r($numero);

    // $message='';
    

    // if(count($resultados)>0 && $contrasena==$_GET[$contrasena]){
    //     $_SESSION['persona_id'] = $resultados['id'];
    //     echo ('si coniciden');
    // }else{
    //     $message="los datos no coiciden";
    // }
// }
// $sql= "select * from persona where correo_electronico = $correo_electronico and contrasena = $contrasena";
// // $confirmacion= $sql->rowCount();

// $gsent=$pdo->prepare($sql);
// $gsent->execute();
// $cuenta = $gsent->rowCount();
// print_r($cuenta);

// // $resultado=$gsent->fetchAll();

// if ($cuenta == 1){
//     echo ('si esta en la base de datos');
// }else{
//     echo('no esta !!');
// }

// print_r ($sql);

?>