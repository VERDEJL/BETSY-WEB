<?php

    public function insertar($nombre, $stock, $precio){
    $dbhost = "localhost"; //host donde esta la base de datos
    $dbname = "tienda"; //nombre de BD
    $dbuser = "root"; // user name
    $dbpass = ""; // password de usuario

    $connect = mysqli_connect($dbhost,     $dbuser, $dbpass) or die ("Error".mysqli_error($link));
    mysqli_select_db($connect,$dbname);

    //include "inserta.html";
    $nombre=$_POST["nombre"];
    $stock=$_POST["stock"];
    $precio=$_POST["precio"];

    if ($nombre!="" )
    {
    $sitecleo=1;
    }
    else 
    {
    echo "no tecleaste nombre";
    }

    $sql = "INSERT INTO tienda.productos ( 'id' , 'nombre' , 'stock', 'precio' ) 
    VALUES (
    '', '$nombre', '$stock', '$precio'
    );";

    if ($sitecleo==1)
    {
        mysqli_query($connect, $sql);
        $sitecleo=0;
    }

    echo insertar( '', "camisa", 20,20);
}
?>