<?php

$coneccion = 'mysql:host=localhost;dbname=boompuf';
$usuario= 'root';
$pass= 'j-0980161816';


try{
    $pdo = new PDO($coneccion,$usuario,$pass);

    // echo 'Conectado';

    // foreach($pdo->query('select * from ´persona´')as $fila){
    //     print_r($fila);
    // }
    // $sql= 'select * from persona';
    // $gsent=$pdo->prepare($sql);
    // $gsent->execute();

    // $resultado=$gsent->fetchAll();

    // print_r ($resultado);
        
}catch (PDOExeption $e){
    print "Error!:".$e->getMessage()."<br/>";
}

?>