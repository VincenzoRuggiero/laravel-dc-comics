@extends('layouts.app')

@section('create-form')
<h1 class="p-3">Create new product</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.products.store' )}}" method="POST">
            @csrf    
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
        
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
        
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb">
                </div>
        
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
        
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series">
                </div>
        
                <div class="mb-3">
                    <label for="sale_date" class="form-label">On sale from</label>
                    <input type="date" class="form-control" name="sale_date">
                </div>
        
                <div class="mb-3">
                    <label for="type" class="form-label">Comic type</label>
                    <input type="type" class="form-control" name="type">
                </div>
            
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
     </div>
</div>
    
@endsection