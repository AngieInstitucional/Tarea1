 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Iniciar Sesión</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fuente{
            font-size: 20px;
        }
        .padre {
            background: #003366;
            height: 600px;
            width: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 25px;
            opacity: 0.9;
        }
    </style>
 </head>
 <body>
    <div class="padre container fuente">
        <form class="col-12" action="login" method="post">
            <div class="form-group">
                <span class="abs-center label label-primary fuente" >Ingrese sus Credenciales</span>
                <br><input type="text" class="fuente form-control" placeholder="Numero de cedula" name="username"/>
                @error('username')
                    <br><span style="color:white">Ingrese un nombre de usuario</span><br>
                @enderror
                <br><input type="password" class="fuente form-control" placeholder="Contraseña" name="password"/>
                @error('password')
                    <br><span style="color:white">Ingrese una contraseña</span><br>
                @enderror
                {{@csrf_field()}}
                <br><div class="abs-center">
                    <button type="submit" class="fuente btn btn-primary regular-button"> Ingresar </button>
                </div>
                @if ($error = $errors->login->first('LogIn'))
                    <br><span style="color:white">{{$error}}</span><br>
                @endif
            </div>
        </form>
    </div>
 </body>
 </html>