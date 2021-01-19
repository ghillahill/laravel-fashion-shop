<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fashion Shop</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Fashion Shop</span>
            </div>
        </nav>

        <div class="container">
            <div class="row pt-3">
                @foreach ($dresses as $dress)
                    <div class="col-sm pt-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Brand: {{$dress->brand}}
                                </h5>
                                <p class="card-text">
                                    Type: {{$dress->type}}
                                </p>
                                <p class="card-text">
                                    Color: {{$dress->color}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
