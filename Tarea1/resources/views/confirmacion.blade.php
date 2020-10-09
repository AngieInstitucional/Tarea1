<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <title>Confirmación</title>
</head>
<body>
    <div class = "container">
        <blockquote class="blockquote text-center">
            <h2 class = "p-3 mb-2 bg-info text-white">Trámite actualizado con éxito</h2>
        </blockquote>
        <blockquote class="blockquote text-center">
            <h5 class = "p-3 mb-2 bg-secondary text-white">Información del tramite actualizado</h5>
        </blockquote>
        <ul class="list-group">
            <li class="list-group-item list-group-item-success"> 
                Trámite: {{ $tramite->tramitesTiposId->descripcion }}
            </li>
            <li class="list-group-item list-group-item-success"> 
                Usuario que realizó el cambio: {{ $cambio->usuarioId->nombreCompleto }}
            </li>
            <li class="list-group-item list-group-item-success"> 
                Estado actual: {{ $cambio->tramitesEstadoId->nombre }}
            </li>
        </ul>
        <blockquote class="blockquote text-center">
            <h6 class = "p-3 mb-2 bg-white text-white"></h6>
        </blockquote>
        <form action = " {{ route('tramites') }} " method = "GET">
            <button type="submit" class="fuente btn btn-primary regular-button"> Volver a trámites </button>
        </form>
    </div>
</body>
</html>