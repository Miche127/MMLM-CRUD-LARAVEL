<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO A LA PAGINA JUEGOS</h1>
    <h2>Listado de juegos<h2>
    @forelse ( $games as $item )
        <li>{{ $item }}</li>
    @empty
    <li>No hay datos</li>
    @endforelse
</body>
</html>