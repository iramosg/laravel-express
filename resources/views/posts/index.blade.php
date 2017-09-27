@extends('template')

@section('title')

@endsection

@section('content')

<h1>Blog</h1>

@foreach($posts as $post)

	<h2>{{ $post->title }}</h2>
	<p>{{ $post->content }}</p>
	<b>Tags: </b>
	<ul>
	@foreach($post->tags as $tag)
		<li>{{ $tag->name }}</li>
	@endforeach
	</ul>

	<h3>Comentários</h3>
	@foreach($post->comments as $comment)
		<b>Nome: </b> {{ $comment->name}}<br>
		<b>Comentário: </b> {{ $comment->comment}}<br>
	@endforeach
	<hr>

@endforeach

@endsection
