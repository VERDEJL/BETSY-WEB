<?php

$db = new mysqli("localhost", "root", "", "tienda");

//verificar conexion
if (mysqli_connect_errno()){
    printf("Connect failed: %s \n", mysqli_connect_errno());
    exit();
}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";

if ($nombre == ""){
    $mensaje = "No puede haber campos vacíos";
    echo "<script type='text/javascript'> alert('$mensaje'); 
    window.location.href='admin.php';
    </script>";
    //header('Location: admin.php');
}else{
    $btn = $_POST['btn'];
    eliminar($db,$nombre);

}
function eliminar($db, $nombre){
    if(mysqli_query($db, 
        "DELETE FROM `productos` WHERE nombre='$nombre'"))
    {
        $mensaje = "Artículo eliminado";
        echo "<script type='text/javascript'> alert('$mensaje'); 
        window.location.href='borrar.php';
        </script>";
        //header('Location: admin.php');
    }
}

