<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">

    <title>Trámite #{{$tramite->id}}</title>
</head>
<body>
    <div class = "container">
        <blockquote class="blockquote text-center">
            <h1 class = "p-3 mb-2 bg-info text-white">Trámite número {{$tramite->id}}: {{$tramite->tramitesTiposId->descripcion}}</h1>
        </blockquote>
        <blockquote class="blockquote text-center">
            <h3 class = "p-3 mb-2 bg-secondary text-white"> Cliente: {{$tramite->cliente->nombreCompleto}}</h3>
        </blockquote>
        <div class = "row">
            <div class="col-md">
                <blockquote class="blockquote text-center">
                    <h5 class = "p-3 mb-2 bg-secondary text-white">Requisitos Presentados</h5>
                </blockquote>
                <ul class="list-group">
                @foreach($tramite->requisitosPresentados as $presentado)
                    <li class="list-group-item list-group-item-info">{{ $presentado->requisitoId->descripcion }}</li>
                @endforeach
                </ul>
                <div>
                    <blockquote class="blockquote text-center">
                        <h6 class = "p-3 mb-2 bg-white text-white"></h6>
                    </blockquote>
                    <blockquote class="blockquote text-center">
                        <h6 class = "p-3 mb-2 bg-secondary text-white">Editar Estado del trámite</h6>
                    </blockquote>
                    <form action = " {{ route('editar') }} " method = "POST">
                        <div class = "form-group">
                            <div>
                                <select id = "tramEstados" name = "tramEstados">
                                    <option value = "">--Seleccione el estado--</option>
                                    @foreach($estados as $estado)
                                        <option value = "{{$estado->id}}"> {{ $estado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <button type="submit"  class="btn btn-primary">Guardar Estado</button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="col-md">
                <blockquote class="blockquote text-center">
                    <h5 class = "p-3 mb-2 bg-secondary text-white">Requisitos Necesarios</h5>
                </blockquote>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Requisito</th>
                            <th scope="col">Variación</th>
                            <th scope="col">Grupo de exclusión</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($tramite->tramitesTiposId->variaciones as $variacion)
                    @foreach($variacion->requisitos as $requisito)
                        <tr>
                            @if ( $variacion->grupo === 1 )
                            <td><p class="text-primary"> {{ $requisito->id }} </p></td>
                            <td><p class="text-primary"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-primary"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-primary"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 2 )
                            <td><p class="text-success"> {{ $requisito->id }} </p></td>
                            <td><p class="text-success"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-success"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-success"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 3 )
                            <td><p class="text-secondary"> {{ $requisito->id }} </p></td>
                            <td><p class="text-secondary"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-secondary"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-secondary"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 4 )
                            <td><p class="text-danger"> {{ $requisito->id }} </p></td>
                            <td><p class="text-danger"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-danger"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-danger"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 5 )
                            <td><p class="text-warning"> {{ $requisito->id }} </p></td>
                            <td><p class="text-warning"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-warning"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-warning"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 6 )
                            <td><p class="text-primary"> {{ $requisito->id }} </p></td>
                            <td><p class="text-primary"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-primary"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-primary"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 7 )
                            <td><p class="text-success"> {{ $requisito->id }} </p></td>
                            <td><p class="text-success"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-success"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-success"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 8 )
                            <td><p class="text-secondary"> {{ $requisito->id }} </p></td>
                            <td><p class="text-secondary"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-secondary"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-secondary"> {{ $variacion->grupo }} </p></td>
                            @elseif ( $variacion->grupo === 9 )
                            <td><p class="text-danger"> {{ $requisito->id }} </p></td>
                            <td><p class="text-danger"> {{ $requisito->descripcion }} </p></td>
                            <td><p class="text-danger"> {{ $variacion->descripcion }} </p></td>
                            <td><p class="text-danger"> {{ $variacion->grupo }} </p></td>
                            @endif
                        </tr>
                    @endforeach
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>