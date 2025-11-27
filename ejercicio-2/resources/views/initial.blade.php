<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background: #333;
            padding: 10px;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        header a:hover {
            text-decoration: underline;
        }

        .container {
            margin: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 5px;
        }

        .btn:hover {
            background: #45a049;
        }
    </style>
</head>
<body>

    <!-- Menú -->
    <header>
        <a href="/">Inicio</a>
        <a href="/products">Productos</a>
        <a href="/clients">Clientes</a>
        <a href="/contact">Contacto</a>
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <h1>Bienvenido a mi aplicación Laravel</h1>
        <p>Selecciona una opción para continuar:</p>

        <a href="/products" class="btn">Ver Productos</a>
        <a href="/clients" class="btn">Ver Clientes</a>
        <a href="/about" class="btn">Acerca de</a>
    </div>

</body>
</html>