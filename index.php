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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
            <script>
            $(document).ready(function(){
            $('.slider').bxSlider();
            });
        </script>
</head>

<body>
    <?php
        include_once('layout/header.php');
    ?>
    <h2>Bienvenidos a betsy, la mejor pagina para comprar ropa en linea!</h2>
    
    <div class="slider">
        <div>
            <section class="banner">
                <div class="contenido-banner">
                    
                    <div class="ubicacion">
                        <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="68"
                                height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="11" r="3" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                            Torreón, México</p>
                    </div>
                    <a class="boton" href="contacto.html">Contactar</a>
                </div>
            </section>
        </div>


        <div>
            <section class="banner2">
                <div class="contenido-banner"> 
                    <p> Ropa de la mejor calidad, artesanalmente hecha desde la antártica
                </div>
            </section>
        </div>

        <div>
            <section class="banner3">
                <div class="contenido-banner">
                    <p> Entrega inmediata por teletransportación cuántica
                </div>
            </section>
        </div>

    </div>

    <main class="contenedor sombra">
        <h2>Catálogo</h2>
        <div class="servicios">
            <section class="servicio">
                <h2>//////</h2>
	<a href="catalogo.html">
	<img class="producto__imagen" src="img/HOMBRE.PNG" alt="imagen camisa">
              	</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aspernatur error laboriosam odio unde
                    eveniet
                    fugit inventore, illo esse repudiandae nemo quam velit.</p>
            </section>

            <section class="servicio">
                <h2>//////</h2>
<a href="catalogo.html">
<img class="producto__imagen" src="img/MUJER.PNG" alt="imagen camisa">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lorem ante, posuere volutpat dictum
                    at,
                    suscipit sit amet nisi. </p>
            </section>

            <section class="servicio">
                <h2>//////</h2>
		<a href="catalogo.html">
			<img class="producto__imagen" src="img/NINO.PNG" alt="imagen camisa">
            		   </a>
                <p> Phasellus id dapibus ligula. Quisque tincidunt sem a nunc congue vulputate. </p>
            </section>
        </div>

    </main>

    <?php
        include_once('layout/footer.php');
    ?>

</body>

</html>