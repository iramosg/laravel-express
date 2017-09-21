@extends('template')

@section('title')

@endsection

@section('content')

<h1>Blog</h1>

@foreach($posts as $post)

	<h2>{{ $post->title }}</h2>
	<p>{{ $post->content }}</p>
	<hr>

@endforeach

@endsection
