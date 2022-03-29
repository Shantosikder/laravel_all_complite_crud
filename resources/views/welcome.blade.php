<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <title>Laravel</title>
    </head>
    <body class="antialiased">

    <div class="container">
        <h2>WELCOME TO MY CRUD PROJECT::</h2>
        <a href="{{url('products')}}" class="btn btn-primary">Go To Product Info &#8594;</a>
    </div>

    </body>
</html>
