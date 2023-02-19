<head>
 <link rel="stylesheet" href="styles2.css"> 
    <script language="Javascript">
        function imprSelec(nombre) {
        var ficha = document.getElementById(nombre);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write( ficha.innerHTML );
        ventimp.document.close();
        ventimp.print( );
        ventimp.close(); }
	</script>
</head>

<nav class="nav">
    <ul>
        <li><a href="hombres.php">Hombres</a></li>
        <li><a href="mujeres.php">Mujeres</a></li>
        <li><a href="#">Comprar</a> </li>
        <li><a href="javascript:imprSelec('carrito-container')">Imprimir</a> </li>
        <li class="carrito">
            <a href="#" class='btn-carrito'>Carrito</a>
            <div id="carrito-container">
                <div id="tabla">
                </div>
            </div>
        </li>
    </ul>
</nav>