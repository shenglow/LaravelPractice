@extends('management.layouts.main')

@section('title', 'Home Edit')

@section('nav_home', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <textarea type="text" name="title" class="form-control">@isset($home) {{ $home->title }} @endisset</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" name="content" class="form-control">@isset($home) {{ $home->content }} @endisset</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file">
                    @isset($home)
                        <img src="{{ asset('uploads/home/'.$home->image) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection