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
        <h3>Filtrado por opciones multiples</h3><br>
        <form action=" {{ route('buscar1') }} " method = "GET">
            <div class="input-group mb-3">
                <div>
                    <select class="btn btn-outline-secondary dropdown-toggle" id = "filter" name = "filter">
                        <option value = "Id del tramite"> Id del tramite</option>
                        <option value = "Estado del tramite"> Estado del tramite</option>
                        <option value = "Cedula del cliente"> Cedula del cliente</option>
                    </select>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" name="txtBuscar">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div><br>
        </form>
        <form action=" {{ route('buscar2') }} " method = "GET"> 
            <div>
                <h3>Filtrado por fechas</h3><br>
                <div class="input-group mb-3">
                    <span class="badge badge-light">Inicial</span><input type="number" id="yearFI" name="yfi"  class="form-control" placeholder='yyyy'>
                    <span class="badge badge-light">/</span><input type="number" id="mesFI" name="mfi" class="form-control" placeholder='mm'>
                    <span class="badge badge-light">/</span><input type="number" id="ddFI" name="dfi" class="form-control" placeholder='dd'>
                    <span class="badge badge-light">Final</span><input type="number" id="yearFF" name="yff" class="form-control" placeholder='yyyy'>
                    <span class="badge badge-light">/</span><input type="number" id="mesFF" name="mff" class="form-control" placeholder='mm'>
                    <span class="badge badge-light">/</span><input type="number" id="ddFF" name="dff" class="form-control" placeholder='dd'>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div><br>
        </form>
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
                @if(is_array($tramites))
                    @foreach($tramites as $tramite)
                    <tr>
                        <td>
                            <a href = "{{ route('informacion', $tramite->id) }}">
                                {{ $tramite->id }}
                            </a>
                        </td>
                        <td>{{ $tramite->tramitesTiposId->descripcion }}</td>
                        <td>{{ $tramite->cliente->nombreCompleto }}</td>
                        <td>{{ $tramite->tramitesTiposId->departamento->nombre }}</td>
                    </tr>
                    @endforeach 
                @else
                    <tr>
                        <td>
                            <a href = "{{ route('informacion', $tramites->id) }}">
                                {{ $tramites->id }}
                            </a>
                        </td>
                        <td>{{ $tramites->tramitesTiposId->descripcion }}</td>
                        <td>{{ $tramites->cliente->nombreCompleto }}</td>
                        <td>{{ $tramites->tramitesTiposId->departamento->nombre }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        @if ($error = $errors->tramites->first('errores'))
            <br><span style="color:black">{{$error}}</span><br>
        @endif
    </div>
</body>
</html>