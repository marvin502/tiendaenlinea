<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400;0,500;1,400&family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <img class="header_logo" src="img/logo.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion_enlace" href="index.php">Tienda</a>
        <a class="navegacion_enlace navegacion_enlace--activo" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nosotros</h1>
        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque, eget ullamcorper justo feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque, eget ullamcorper justo feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                
            </div>
            <img class="nosotros__imagen" src="img/nosotros.jpg" alt="imagen nosotros">
        </div>
    </main>

    <section class="contenedor comprar">
        <h2 class="comprar__titulo">Por qué comprar con nosotros?</h2>
        <div class="bloques">
            <div class="bloque">
               <img class="bloque__imagen" src="img/icono_1.png" alt="porque comprar"> 
               <h3 class="bloque__titulo">El mejor precio</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque</p>
            </div><!--Bloque-->
            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_2.png" alt="porque comprar"> 
                <h3 class="bloque__titulo">Para Devs</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque</p>
             </div><!--Bloque-->
             <div class="bloque">
                <img class="bloque__imagen" src="img/icono_3.png" alt="porque comprar"> 
                <h3 class="bloque__titulo">Envío Gratis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque</p>
             </div><!--Bloque-->
             <div class="bloque">
                <img class="bloque__imagen" src="img/icono_4.png" alt="porque comprar"> 
                <h3 class="bloque__titulo">La mejor calidad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis accumsan libero, at lobortis leo. Nam facilisis tellus et erat pellentesque</p>
             </div><!--Bloque-->
        </div><!--Bloques-->
    </section>
    <footer class="footer">
        <p class="footer_text">Front End Store - Todos los derechos Reservados 2022</p>
    </footer>
</body>
</html>