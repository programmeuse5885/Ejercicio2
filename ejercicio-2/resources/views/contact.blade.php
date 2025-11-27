<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>

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

        form {
            max-width: 400px;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        /* ---- BOTONES UNIFORMES ---- */
        .btn {
            margin-top: 15px;
            padding: 10px 15px;
            font-size: 15px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            width: 120px;     /* tamaño idéntico */
            text-align: center;
        }

        /* Enviar */
        .btn-submit {
            background: #4CAF50;
            color: white;
            border: none;
        }

        .btn-submit:hover {
            background: #45a049;
        }

        /* Cancelar */
        .btn-cancel {
            background: #a3a3a3;
            color: white;
        }

        .btn-cancel:hover {
            background: #8a8a8a;
        }

        /* Botón Regresar (opcional) */
        .btn-back {
            padding: 10px 15px;
            background: #555;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-back:hover {
            background: #444;
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

    <div class="container">
        <h1>Contacto</h1>
        <p>Envíanos un mensaje y nos pondremos en contacto contigo.</p>

        <!-- Formulario -->
        <form action="#" method="POST">
            @csrf

            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Tu nombre">

            <label>Email:</label>
            <input type="email" name="email" placeholder="Tu correo">

            <label>Mensaje:</label>
            <textarea name="mensaje" rows="4" placeholder="Escribe tu mensaje"></textarea>

            <!-- Botones iguales -->
            <button type="button" class="btn btn-submit" onclick="enviarFormulario()">Enviar</button>
            <a href="/" class="btn btn-cancel">Cancelar</a>
        </form>

        <a href="/" class="btn-back">Regresar</a>
    </div>

</body>
</html>


<script>
    function enviarFormulario() {
        alert("Tu mensaje ha sido enviado correctamente.");
        window.location.href = "/";  // Redirige al inicio
    }
</script>