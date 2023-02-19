document.addEventListener('DOMContentLoaded', () =>{ //Se mantiene y se guarda la información del carrito en una cookie
    const cookies = document.cookie.split(';');
    let cookie = null;
    cookies.forEach(item =>{
        if(item.indexOf('items') > -1){
            cookie = item;
        }
    });
    if(cookie != null){
        const count = cookie.split('=')[1];
        console.log(count);
        document.querySelector('.btn-carrito').innerHTML = `(${count}) Carrito`;
    }
})

const bCarrito = document.querySelector('.btn-carrito'); //Referencia al objeto cuando hay un click a la clase btn-carrito

bCarrito.addEventListener('click', event =>{            //Al darle click al boton del carrito se muestra un block, si se le vuelve a dar click, se esconde
    const carritoContainer = document.querySelector('#carrito-container');

    if(carritoContainer.style.display == ''){
        carritoContainer.style.display = 'block';

        actualizarCarritoUI();
    }else{
        carritoContainer.style.display = '';
    }
});

function actualizarCarritoUI(){
    fetch('http://localhost/Proyecto/api_carrito.php?action=mostrar') 
    .then(response => response.json())
    .then(data =>{
        console.log(data);
        let tablaCont = document.querySelector('#tabla');
        let precioTotal = '';
        let html = ``;

        data.items.forEach(element => { //Bloques de HTML para cada producto
            html += `
                <div class='fila'>
                    <div class='imagen'><img src='img/${element.imagen}' width='100' /></div>
                    <div class='info'>
                        <input type='hidden' value='${element.id}' />
                        <div class='nombre'>${element.nombre}</div>
                        <div>${element.cantidad} items de $${element.precio}</div>
                        <div>Subtotal: $${element.subtotal}</div>
                        <div class='botones'><button class='btn-remove'>Quitar 1 del carrito</button></div>
                    </div>
                </div>
            `;
        });
        
        precioTotal = `<p>Total: $${data.info.total}</p>`;
        tablaCont.innerHTML = precioTotal + html;
        document.cookie = `items=${data.info.count}`;
        document.querySelector('.btn-carrito').innerHTML = `(${data.info.count}) Carrito`;
        //bCarrito.innerHTML = `items=${data.info.count}`;
        document.querySelectorAll('.btn-remove').forEach(boton =>{
            boton.addEventListener('click', e => {
                const id = boton.parentElement.parentElement.children[0].value; //Children[0] es el id, o el input tipo hidden
                removeItemFromCarrito(id);      //Por cada click se elimina un producto.
            })
        });
    });
}

const botones = document.querySelectorAll('button');

botones.forEach(boton => {
    const id = boton.parentElement.parentElement.children[0].value;

    boton.addEventListener('click', e =>{
        addItemToCarrito(id);
    });
});

const addItemToCarrito = id =>{
    fetch('http://localhost/Proyecto/api_carrito.php?action=add&id=' + id)
    .then(response =>{
        return response.text();
    })
    .then(data =>{
        console.log(data.statuscode);
        actualizarCarritoUI();
    });
};

const removeItemFromCarrito = id =>{
    fetch('http://localhost/Proyecto/api_carrito.php?action=remove&id=' + id)
    .then(res => res.json())
    .then(data =>{
        console.log(data.status);
        actualizarCarritoUI();
    });
};
