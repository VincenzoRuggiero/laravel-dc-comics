@extends('layouts.app')

@section('edit-form')
<h1 class="p-3">Edit product</h1>
<div class="container">
    <a href="{{ route('admin.products.index')}}">&larr; Back to list</a>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.products.update', $product->id )}}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $product->title }}">
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                </div>
        
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb" value="{{ $product->thumb }}">
                </div>
        
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
        
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" value="{{ $product->series }}">
                </div>
        
                <div class="mb-3">
                    <label for="sale_date" class="form-label">On sale from</label>
                    <input type="date" class="form-control" name="sale_date" value="{{ $product->sale_date }}">
                </div>
        
                <div class="mb-3">
                    <label for="type" class="form-label">Comic type</label>
                    <input type="type" class="form-control" name="type" value="{{ $product->type }}">
                </div>
            
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
     </div>
</div>
    
@endsection