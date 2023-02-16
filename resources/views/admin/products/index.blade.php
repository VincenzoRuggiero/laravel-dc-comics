@extends('layouts.app')

@section('index-content')
    <h1 class="p-3">Comics List</h1>
    <div class="container">
 {{-- Flash messages that appear when an action has been made --}}
      @if (session()->has('success'))
      <div class="row">
        <div class="col-12 alert alert-success text-center">
          {{ session('success') }}
        </div>
      </div>

      @elseif (session()->has('error'))
      <div class="row">
        <div class="col-12 alert alert-danger text-center">
          {{ session('error') }}
        </div>
      </div>

      @elseif (session()->has('info'))
      <div class="row">
        <div class="col-12 alert alert-primary text-center">
          {{ session('info') }}
        </div>
      </div>
        
      @endif
 {{-- Button to create new product that'll be inserted in comics db --}}
      <div class="row">
        <div class="col-12">
          <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create New Product</a> 
        </div>
      </div>
 {{-- Bootstrap table created using database data --}}
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
                        @foreach ($comics as $product)
                        <tr>
                          <td>{{ $product['id']}}</td>
                          <td>{{ $product['title']}}</td>
                          <td>{{ $product['price']}}</td>
                          <td>{{ $product['series']}}</td>
                          <td>{{ $product['sale_date']}}</td>
                          <td>{{ $product['type']}}</td>
                          <td><a class="btn btn-primary" href="{{ route('admin.products.show', $product['id'])  }}">Show</a></td>
                          <td><a class="btn btn-secondary" href="{{ route('admin.products.edit', $product['id'])  }}">Edit</a></td>
                          <td>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection