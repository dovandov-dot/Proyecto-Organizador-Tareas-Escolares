<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

</head>
<body>
    <div class="container py-4">
        <nav class="navbar">
            <a class="navbar-brand text-decoration-none" href="http://localhost/Proyecto/public/">Home</a>
            <button class="btn" type="button">ingles</button>
            <button class="btn" type="button">español</button>
            <a class="text-decoration-none" href="#">Iniciar seción</a>
            <a class="text-decoration-none"  href="#">Registrarse</a>
        </nav>
   </div>

   <div class="container">
        {!! $slot !!}
   </div>
</body>
</html>