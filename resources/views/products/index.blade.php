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
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Title</th>
                          <th scope="col">Price</th>
                          <th scope="col">Series</th>
                          <th scope="col">Sale date</th>
                          <th scope="col">Type</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                          <td>{{ $comic['id']}}</td>
                          <td>{{ $comic['title']}}</td>
                          <td>{{ $comic['price']}}</td>
                          <td>{{ $comic['series']}}</td>
                          <td>{{ $comic['sale_date']}}</td>
                          <td>{{ $comic['type']}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>