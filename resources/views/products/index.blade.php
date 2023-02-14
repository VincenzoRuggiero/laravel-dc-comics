@extends('layouts.app')

@section('index-content')
    <h1 class="p-3">Comics List</h1>
    <div class="container">
 {{-- Button to create new product that'll be inserted in comics db --}}
      <div class="row">
        <div class="col-12">
          <a href="" class="btn btn-primary">Create New Product</a> 
        </div>
      </div>
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
                          <th scope="col">Action</th>
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
                          <td><a class="btn btn-primary" href="products/{{ $comic['id']}}">Show</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection