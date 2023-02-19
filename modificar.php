<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=j, initial-scale=1.0">
        <title>betsy</title>
        <link rel="preload" href="normalize.css" as="style">
        <link rel="stylesheet" href="normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <script src="validar.js"> </script>
    </head>

<body>
    <?php
        include_once('layout/header-admin.php');
    ?>
    <p> Inicio -> Admin -> Nuevo</p>
    <main class="contenedor sombra">
        <section>
            <h2>Modificar articulo</h2>
            <form class="contacto__formulario" action="alta.php" method="post">
                <fieldset>
                    <div class="contenedor-login">
                        <div class="campo">
                            <label>Nombre</label>
                            	<input id="nombre" name="nombre" class="input-text" type="text" placeholder="Nombre del artículo">
                        </div>
                        <div class="campo">
                            <label>Precio</label>
                            <input id="precio" name="precio" class="input-text" type="tel" placeholder="Precio">
                        </div>
                        <div class="campo">
                            <label>Categoría</label>
                            <select id="categoria" name="categoria" class="input-option" type="text" placeholder="Categoría del articulo">
                                <option value ="hombre">Hombre</option>
                                <option value ="mujer">Mujer</option>
                                <option value = "hombre">Niño </option>
                        </div>
                        <div class="campo">
                            <label>Nombre de la imagen correspondiente</label>
                            <input id="imagen" name="imagen" class="input-text" type="text" placeholder="Imagen">
                        </div>
                        <div class="campo">
                            <label>Stock</label>
                            <input id="stock" name="stock" class="input-text" type="text" placeholder="Stock">
                        </div>
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-100" type="submit" value="Modificar" name="btn">
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <?php
        include_once('layout/footer.php');
    ?>

</body>

</html>