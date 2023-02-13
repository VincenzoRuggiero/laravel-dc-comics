<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex py-5">
                    <div class="card-image">
                        <img src="{{ $comic['thumb'] }}"></img>
                    </div>
                    <div class="content ps-3">
                        <h2>{{ $comic['title']}}</h2>
                        <p>Descrizione: {{ $comic['description']}}</p>
                        <p>Prezzo: {{ $comic['price']}}&euro;</p>
                        <p>Serie: {{ $comic['series']}}</p>
                        <p>Data di uscita: {{ $comic['sale_date']}}</p>
                        <p>Tipo: {{ $comic['type']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>