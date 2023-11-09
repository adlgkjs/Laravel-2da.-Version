{{--Este es el cuerpo del correo que se envia--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enviar correo</h1>
    <p>Primer correo desde Laravel</p>

    <p><strong>Nombre:</strong>{{$data['name']}}</p>
    <p><strong>Correo:</strong>{{$data['correo']}}</p>
    <p><strong>Mensaje:</strong>{{$data['mensaje']}}</p>

    
</body>
</html>