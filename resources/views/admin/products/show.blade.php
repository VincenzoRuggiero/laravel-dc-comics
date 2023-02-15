@extends('layouts.app')

@section('show-content')
    <h1 class="p-3">Comic Details</h1>
    <div class="container">
        <a href="{{ route('admin.products.index')}}">&larr; Back to list</a>
        <div class="row">
            <div class="col-12">
                <div class="d-flex py-3">
                    
                    <div class="card-image">
                        <img src="{{ $product['thumb'] }}"></img>
                    </div>
                    <div class="content ps-3">
                        <h2>{{ $product['title']}}</h2>
                        <p>Descrizione: {{ $product['description']}}</p>
                        <p>Prezzo: {{ $product['price']}}&euro;</p>
                        <p>Serie: {{ $product['series']}}</p>
                        <p>Data di uscita: {{ $product['sale_date']}}</p>
                        <p>Tipo: {{ $product['type']}}</p>
                        <div class="actions d-flex">
                            <a class="btn btn-secondary me-2" href="{{ route('admin.products.edit', $product['id'])  }}">Edit</a>

                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    