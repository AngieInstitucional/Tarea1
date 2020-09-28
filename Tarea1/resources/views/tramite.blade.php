<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

    <title>Tramites Registrados</title>
</head>
<body>
    
    <div class="container my-12">
        <h1 class = "display-4">Tramites</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Departamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tramites as $tramite)
                <tr>
                    <td>{{ $tramite->id }}</td>
                    <td>{{ $tramite->tramitesTiposId->descripcion }}</td>
                    <td>{{ $tramite->cliente->nombreCompleto }}</td>
                    <td>{{ $tramite->tramitesTiposId->departamento->nombre }}</td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</body>
</html>