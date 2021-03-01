@extends ('layout')

@section('content')
    <h1>Post Section {{ $post->slug }}</h1>
    <p>{{ $name }} : {{ $post->body }}</p>
@endsection