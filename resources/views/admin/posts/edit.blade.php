@extends('template')

@section('title')

@endsection

@section('content')

<h1>Editar Post: {{ $post->title }}</h1>

@if($errors->any())

<ul class="alert-danger">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach

</ul>

@endif

{!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

	@include('admin.posts._form')

		<div class="form-group">
		{!! Form::submit('Salvar Post', ['class'=>'btn btn-primary']) !!}
	</div>	

{!! Form::close() !!}

@endsection
