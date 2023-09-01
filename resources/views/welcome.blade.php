<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Estilo para el encabezado */
        h1 {
            background-color: #303d2e;
            color: #d6d7a2;
            text-align: center;
            padding: 10px;
        }

        /* Contenedor principal */
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            font-size: 20px;
        }

        /* Estilos para la tabla de entrada de productos */
        #formulario {
            width: 45%;
        }

        #formulario table {
            width: 100%;
            border-collapse: collapse;
        }

        #formulario th, #formulario td {
            padding: 10px;
            border: 1px solid #131d15;
            background-color: #58664e;
            color: #d6d7a2;
        }

        /* Estilos para la tabla de productos agregados */
        #productos-agregados {
            width: 45%;
        }

        #productos-agregados table {
            width: 100%;
            border-collapse: collapse;
        }

        #productos-agregados th, #productos-agregados td {
            padding: 10px;
            border: 1px solid #131d15;
            background-color: #58664e;
            color: #d6d7a2;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>

    <div class="container">
        <div id="formulario">
            <h2>Agregar Producto</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="nombre_producto" /></td>
                        <td><input type="text" name="precio" /></td>
                        <td><input type="text" name="descripcion" /></td>
                        <td><button onclick="agregarProducto()">Agregar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="productos-agregados">
            <h2>Productos Agregados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody id="productos-agregados-body">
                    <!-- Los productos agregados aparecerán aquí -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
