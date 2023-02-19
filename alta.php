<?php

$db = new mysqli("localhost", "root", "", "tienda");

//verificar conexion
if (mysqli_connect_errno()){
    printf("Connect failed: %s \n", mysqli_connect_errno());
    exit();
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$precio = isset($_POST['precio']) ? $_POST['precio'] : "";
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "";
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : "";
$stock = isset($_POST['stock']) ? $_POST['stock'] : "";

if ($nombre == "" || $precio == "" || $categoria == "" || $imagen == "" || $stock == ""){
    $mensaje = "No puede haber campos vacíos";
    echo "<script type='text/javascript'> alert('$mensaje'); 
    window.location.href='admin.php';
    </script>";
    //header('Location: admin.php');
    
}else{
    $btn = $_POST['btn'];
    switch($btn){
        case 'Agregar':
            alta($db,$nombre,$precio,$categoria,$imagen,$stock);
        break;
        case 'Modificar':
            modificar($db,$nombre,$precio,$categoria,$imagen,$stock);
        break;
        default: break;
    }
}

function alta($db, $nombre, $precio, $categoria, $imagen, $stock){
        
    if(mysqli_query($db, 
        "INSERT INTO `productos`(`id`, `nombre`, `precio`, `categoria`, `imagen`, `stock`) 
        VALUES (NULL,'$nombre','$precio','$categoria', '$imagen', '$stock')"))
    {
        header('Location: admin.php');
    }

}

function modificar($db, $nombre, $precio, $categoria, $imagen, $stock){
        
    if(mysqli_query($db, 
        "UPDATE `productos` SET precio='$precio', categoria='$categoria', imagen='$imagen', stock='$stock' WHERE nombre='$nombre' "))
    {
        header('Location: admin.php');
    }

}