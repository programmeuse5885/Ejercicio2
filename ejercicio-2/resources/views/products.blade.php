<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>

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

    <!-- Menú (igual que en initial.blade.php) -->
    <header>
        <a href="/">Inicio</a>
        <a href="/products">Productos</a>
        <a href="/clients">Clientes</a>
        <a href="/contact">Contacto</a>
    </header>

    <!-- Contenido -->
    <div class="container">
        <h1>Listado de Productos</h1>
        <p>Aquí puedes mostrar tus productos.</p>

        <!-- Tabla de ejemplo -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- Ejemplo (luego puedes reemplazarlo con datos reales) --}}
                <tr>
                    <td>1</td>
                    <td>Producto de prueba</td>
                    <td>$100</td>
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
