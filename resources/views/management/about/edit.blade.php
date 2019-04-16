@extends('management.layouts.main')

@section('title', 'About Edit')

@section('nav_about', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" name="content" class="form-control">@isset($about) {{ $about->content }} @endisset</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file">
                    @isset($about)
                        <img src="{{ asset('uploads/about/'.$about->image) }}" class="img-fluid">
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