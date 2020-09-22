<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
        <h3>LogIn</h3>
        <div>
            <div>
                <label>Usuario</label>
            </div>
            <div>
                <input type="text" class="elemen" id="usuario">
            </div>

            <div>
                <label>Contraseña </label>
            </div>
            <div>
                <input type="text" class="elemen" id="contrasena">
            </div>
            <br>
            <div class ="container">
                <a href= "{{ route('pagUsuarios') }}" class="btn btn-primary" >Ingresar</a>
            </div>
		
        </div>
</body>
</html>