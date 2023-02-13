@extends('layouts.app')

@section('index-content')
    <h1 class="p-3">Comics List</h1>
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
@endsection