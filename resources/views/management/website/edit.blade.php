@extends('management.layouts.main')

@section('title', 'Website Edit')

@section('nav_website', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.website.update') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="@isset($website) {{ $website->title }} @endisset">
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" value="@isset($website) {{ $website->subtitle }} @endisset">
                </div>
                <div class="form-group">
                    <label for="footer">Footer</label>
                    <input type="text" name="footer" class="form-control" value="@isset($website) {{ $website->footer }} @endisset">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection