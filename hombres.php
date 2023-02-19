<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hombres</title>
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
    <?php
        include_once('menu.php');
    ?>

    
        <p>Inicio -> Catálogo -> Hombres</p>
    <main class="contenedor">
        <h1> Ropa de Hombre</h1> 
        <div class="grid__producto">
            <?php
                $response = json_decode(file_get_contents('http://localhost/PROGWEB2021/api_productos.php?categoria=hombre'), true);
                if($response['statuscode'] == 200){
                    foreach($response['items'] as $item){
                        include('items.php');
                    }
                }else{
                    // mostrar error
                }
            ?>
        </div>
    </main>

    <script src="main.js"></script>

    <?php
        include_once('layout/footer.php');
    ?>
</body>
</html>