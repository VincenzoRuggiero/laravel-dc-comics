@extends('layouts.app')

@section('show-content')
    <h1 class="p-3">Comic Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex py-3">
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
@endsection    