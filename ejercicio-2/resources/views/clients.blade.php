<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>

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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #aaa;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        h1 {
            margin-bottom: 15px;
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

    <!-- Menú (igual que en initial y products) -->
    <header>
        <a href="/">Inicio</a>
        <a href="/products">Productos</a>
        <a href="/clients">Clientes</a>
        <a href="/contact">Contacto</a>
    </header>

    <!-- Contenido -->
    <div class="container">
        <h1>Listado de Clientes</h1>
        <p>Aquí puedes mostrar y administrar tus clientes.</p>

        <!-- Tabla de ejemplo -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- Ejemplo estático. Luego se reemplaza por datos reales --}}
                <tr>
                    <td>1</td>
                    <td>Cliente de prueba</td>
                    <td>cliente@correo.com</td>
                    <td>555-123-4567</td>
                    <td>
                        <a href="#">Editar</a> |
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/" class="btn-back">Regresar</a>
    </div>

</body>
</html>
