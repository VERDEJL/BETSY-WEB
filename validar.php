<?php
//echo $_POST
require_once './db.php';
if (isset($_POST['nombre']) && isset($_POST['pass'])) {
    echo 'entrando';
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];


    $sql = connect()->prepare("SELECT * FROM usuarios WHERE nombre = :nombre AND pass = :pass");
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":pass", $pass);
    echo 'llego hasta aqui';

    if ($sql->execute()) {
        header("Location: admin.php");
    }
}

?>
