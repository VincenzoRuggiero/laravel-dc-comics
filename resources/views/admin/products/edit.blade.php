@extends('layouts.app')

@section('edit-form')
<h1 class="p-3">Create new product</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.products.update', $comic->id )}}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $comic->description }}</textarea>
                </div>
        
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
                </div>
        
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
                </div>
        
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
                </div>
        
                <div class="mb-3">
                    <label for="sale_date" class="form-label">On sale from</label>
                    <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
        
                <div class="mb-3">
                    <label for="type" class="form-label">Comic type</label>
                    <input type="type" class="form-control" name="type" value="{{ $comic->type }}">
                </div>
            
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
     </div>
</div>
    
@endsection