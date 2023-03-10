@extends('layouts.app')

@section('create-form')
<h1 class="p-3">Create new product</h1>
<div class="container">
    <a href="{{ route('admin.products.index')}}">&larr; Back to list</a>
    <div class="row">
        <div class="col-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.products.store' )}}" method="POST">
            @csrf    
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                </div>
        
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}">
                </div>
        
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                </div>
        
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" value="{{ old('series') }}">
                </div>
        
                <div class="mb-3">
                    <label for="sale_date" class="form-label">On sale from</label>
                    <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
                </div>
        
                <div class="mb-3">
                    <label for="type" class="form-label">Comic type</label>
                    <input type="type" class="form-control" name="type" value="{{ old('type') }}">
                </div>
            
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
     </div>
</div>
    
@endsection