@extends('layouts.app')

@section('show-content')
    <h1 class="p-3">Comic Details</h1>
    <div class="container">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    