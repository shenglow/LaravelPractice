@extends('management.layouts.main')

@section('title', 'Product Edit')

@section('nav_product', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $product->title }}">
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $product->subtitle }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file">
                    <img src="{{ asset('uploads/product/'.$product->image) }}" class="img-fluid">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection