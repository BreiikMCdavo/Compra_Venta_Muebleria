<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Productos</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 5px; }
    </style>
</head>
<body>
    <h1>Reporte de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $prod)
                <tr>
                    <td>{{ $prod->nombre }}</td>
                    <td>{{ $prod->precio }}</td>
                    <td>{{ $prod->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
