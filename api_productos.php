<?php

include_once 'productos.php';

if(isset($_GET['categoria'])){                      //Si hay categoria
    $categoria = $_GET['categoria'];
    
    if($categoria == ''){ //Si no hay categoria, manda un mensaje de error
        echo json_encode(['statuscode' => 400, 
                            'response' => 'No existe la categoría']);    
    }else{
        $productos = new Productos();
        $items = $productos->getItemsByCategory($categoria);    //Se crea un objeto productos y se agregan los items
        echo json_encode(['statuscode' => 200, 
                        'items' => $items]);
    }
} else if(isset($_GET['get-item'])){            //Si hay objeto
    $id = $_GET['get-item'];

    if($id == ''){
        echo json_encode(['statuscode' => 400, 
                            'response' => 'No hay valor para id']);    
    }else{
        $productos = new Productos();
        $item = $productos->get($id); //Devuelve un elemento en específico del carrito
        echo json_encode(['statuscode' => 200, 
                        'item' => $item]);
    }
}else{
    echo json_encode(['statuscode' => 404, 
                        'response' => 'No se puede procesar la solicitud']);
}

?>