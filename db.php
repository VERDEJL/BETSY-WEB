<?php

function connect() {

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "tienda";
    try {
        $enlace = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        if ($enlace) {
            return $enlace;
        }
    } catch (Exception $ex) {
        echo "<h1>Ocurrió un error con la base de datos: " . $ex->getMessage().'</h1>';
    }
}
    

?>