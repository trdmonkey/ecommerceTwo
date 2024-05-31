<?php

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

    echo "llllllllllll";

} catch(PDOException $e) {
    echo $e->getMessage();
    /* die("Ohh no! A ocurrido un error en la conexión."); */
}