<?php
include_once 'db2.php';

class Productos extends DB2{ //extends DB2 para realizar la conexion a la base de datos

    function __construct(){
        parent::__construct(); //Se crea la sesión llamada productos
    }

    public function get($id){ //obtener productos por id
        $query = $this->connect()->prepare('SELECT * FROM productos WHERE id = :id'); 
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
                'id'        => $row['id'],
                'nombre'    => $row['nombre'],
                'precio'    => $row['precio'],
                'categoria' => $row['categoria'],
                'imagen'    => $row['imagen'],
                'stock'    => $row['stock']
                ];
    }

    public function getItemsByCategory($category){ //obtener productos por categria 
        $query = $this->connect()->prepare('SELECT * FROM productos WHERE categoria = :cat');
        $query->execute(['cat' => $category]);
        $items = [];
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $item = [ //Se obtienen en forma de array
                    'id'        => $row['id'],
                    'nombre'    => $row['nombre'],
                    'precio'    => $row['precio'],
                    'categoria' => $row['categoria'],
                    'imagen'    => $row['imagen'],
                    'stock'    => $row['stock']
                    ];
            array_push($items, $item); //Se agrega el producto y su informacion al array de productos
        }
        return $items;
    }
}

?>