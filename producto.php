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
        <a class="navegacion_enlace navegacion_enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion_enlace" href="nosotros.html">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>React JS</h1>
        <div class="camisa">
            <img class="camisa__imagen" src="img/3.jpg" alt="Imagen del producto">
        
        <div class="camisa__contenido">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi accusantium blanditiis, accusamus cumque quae alias sit laudantium ut molestiae et sunt quas a vitae quos error quam autem eos qui!</p>
            <form class="formulario">
                <select class="formulario__campo">
                    <option disabled selected>-- Seleccionar Talla --</option>
                    <option>Chica</option>
                    <option>Mediana</option>
                    <option>Grande</option>
                </select>
                <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                <input class="formulario__submit" type="submit" value="Agregar al Carrito">
            </form>
        </div>
    </div>
    </main>

    <footer class="footer">
        <p class="footer_text">Front End Store - Todos los derechos Reservados 2022</p>
    </footer>
</body>
</html>