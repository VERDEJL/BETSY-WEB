<div class = "producto">
    <a> 
        <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
        <img class="producto__imagen" src="img/<?php echo $item['imagen'];  ?>" />
        <div class="producto__nombre"><?php echo $item['nombre'];  ?></div>
        <div class="producto__precio">$<?php echo $item['precio'];  ?> MXN</div>
        <div class="producto__precio"><?php echo $item['stock']; ?> piezas</div>
        <!--<form class="formulario botones"> <input class="btn-add formulario__submit " type="submit" value ="Agregar al carrito">
        </form>-->
        <div class="botones ">
        <button class="boton formulario__submit">Agregar al carrito</button>
    </div>
    </a>
</div>