<?php

if(!isset($_SERVER['HTTP_REFERER'])) {
    // Vamos a redirigir a la ubicacion deseada
    // header('location: ../index.php');
    header('location: http://localhost/ecommerce/index.php');
    exit;
}


try {

    // HOST
    define("HOST", "localhost");

    // DBBNAME
    define("DBNAME", "ecommerce");

    // USER
    define("USER", "adsi");

    // PASS
    define("PASS", "utilizar");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* if($conn == true) {
        echo "conexion exitosa!";
    } else {
        echo "error";
    } */

    /* echo "<div style='text-align: center; padding-top: 50px;'>fasdfasdfasdfasdf</div>"; */

} catch(PDOException $e) {
    echo $e->getMessage();
    /* die("Ohh no! A ocurrido un error en la conexión."); */
}