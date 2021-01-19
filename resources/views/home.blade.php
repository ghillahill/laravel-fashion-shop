<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fashion Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>Fashion Shop</h1>

        <ul>
            @foreach ($dresses as $dress)
                <li>
                    <p>{{$dress->brand}}</p>
                    <p>Type: {{$dress->type}}</p>
                    <p>Color: {{$dress->color}}</p>
                </li>
            @endforeach
        </ul>

    </body>
</html>
