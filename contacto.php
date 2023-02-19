<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=j, initial-scale=1.0">
    <title>Freelancer</title>
    <link rel="preload" href="normalize.css" as="style">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        include_once('layout/header.php');
    ?>

    <p>   Inicio -> Contacto</p>

    <main class="contenedor sombra">
        <section>
            <h2>Contacto</h2>

            <form class="contacto__formulario">
                <fieldset>
                    <legend>Contactanos!</legend>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label>Nombre</label>
                            	<input class="input-text" type="text" placeholder="Tu Nombre">
                        </div>
                        <div class="campo">
                            <label>Teléfono</label>
                            <input class="input-text" type="tel" placeholder="Tu teléfono">
                        </div>
                        <div class="campo">
                            <label>Correo</label>
                            <input class="input-text" type="email" placeholder="Tu E-mail">
                        </div>
                        <div class="campo">
                            <label>Mensaje</label>
                            <textarea class="input-text" ea></textarea>
                        </div>
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-100" type="submit" value="Enviar">
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