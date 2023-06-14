<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de consulta SQL</title>
</head>
  
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tabla de consulta SQL</h1>
    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>apellido</th>
                <th>correo_electronico</th>
                <th>password</th>
                <!-- Agrega más columnas si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $resultado)
            <tr>
                <td>{{ $resultado->nombre }}</td>
                <td>{{ $resultado->apellido }}</td>
                <td>{{ $resultado->correo_electronico }}</td>
                <td>{{ $resultado->password }}</td>
                <!-- Muestra los valores de las columnas correspondientes -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

</html>