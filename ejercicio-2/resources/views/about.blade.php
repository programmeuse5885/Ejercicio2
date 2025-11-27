<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acerca de Nosotros</title>

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

        h1 {
            margin-bottom: 10px;
        }

        p {
            margin-top: 10px;
            line-height: 1.6;
        }

        .btn-back {
            display: inline-block;
            padding: 8px 12px;
            background: #555;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        
        .btn-back:hover {
            background: #444;
        }
    </style>
</head>
<body>

    <!-- Menú igual al resto -->
    <header>
        <a href="/">Inicio</a>
        <a href="/products">Productos</a>
        <a href="/clients">Clientes</a>
        <a href="/contact">Contacto</a>
        <a href="/about">Acerca de</a>
    </header>

    <div class="container">
        <h1>Acerca de Nosotros</h1>

        <p>
            Somos una aplicación de ejemplo construida con Laravel.  
            Aquí puedes colocar información sobre tu empresa, tu misión, valores o lo que quieras mostrar
            a tus usuarios.
        </p>

        <p>
            Esta página está diseñada de forma simple para que puedas personalizarla fácilmente según tus necesidades.
        </p>
        <a href="/" class="btn-back">Regresar</a>
    </div>

</body>
</html>
