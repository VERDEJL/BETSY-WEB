<?php
include_once 'session.php';

class Carrito extends Session{

    function __construct(){
        parent::__construct('carrito'); //Se crea una sesión carrito
    }

    public function load(){ //validar 
        if($this->getValue() == NULL){
            return '[]'; //Si no hay un carrito creado, se regresa un array vacío
        }
        return $this->getValue(); 
    }

    public function add($id){ //se consulta con el id
        if($this->getValue() == NULL){
            $items = [];  //si no existe el carrito, se crea uno vacío
        }else{
            $items = json_decode($this->getValue(), 1); //se decodifica la info con decode

            for($i=0; $i<sizeof($items); $i++){ //se recorre el arreglo
                if($items[$i]['id'] == $id){ //Si hay más de un producto con el mismo id, se aumenta la cantidad de productos en el carrito
                    $items[$i]['cantidad']++;
                    $this->setValue(json_encode($items));
                    return $this->getValue();
                }
            }
        }
        //Cuando el carrito está vacío o tiene un producto nuevo: 
        $item = ['id' => (int)$id, 'cantidad' => 1];
        
        array_push($items, $item); 
        $this->setValue(json_encode($items)); //Se agrega el producto al carrito y se codifica
        return $this->getValue();
    }

    public function remove($id){
        if($this->getValue() == NULL){
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);

            for($i=0; $i<sizeof($items); $i++){
                
                if($items[$i]['id'] == $id){ //Si hay un producto con más de un elemento en el carrito, se decrementa
                    $items[$i]['cantidad']--;
                    if($items[$i]['cantidad'] == 0){
                        unset($items[$i]); //Si el producto se queda sin elementos, se elimina del array
                        $items = array_values($items); //Se reordenan los index del array
                    }
                    $this->setValue(json_encode($items));
                    return true;
                }
            }
        }
    }

}
?>