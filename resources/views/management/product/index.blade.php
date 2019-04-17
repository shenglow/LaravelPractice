@extends('management.layouts.main')

@section('title', 'Product List')

@section('nav_product', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.store.update') }}">
                {{ csrf_field() }}
                @isset($products)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subtitle</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row" class="align-middle">{{ $product->id }}</th>
                                    <td class="align-middle">{{ $product->title }}</td>
                                    <td class="align-middle">{{ $product->subtitle }}</td>
                                    <td class="align-middle"><img src="{{ asset('uploads/product/'.$product->image) }}" class="img-thumbnail" width="150px"></td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('admin.product.destroy', $product->id) }}" class="d-inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endisset
                <div class="form-group">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-block">Add New Product</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection