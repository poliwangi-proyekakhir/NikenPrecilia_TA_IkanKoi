@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>

    {{-- <a href="/posts" class="btn btn-primary mb-3">Back to Blog</a> --}}
    {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new posts</a> --}}
@endsection
