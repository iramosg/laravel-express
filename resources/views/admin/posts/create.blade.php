@extends('template')

@section('title')

@endsection

@section('content')

<h1>Criar novo Post</h1>

@if($errors->any())

<ul class="alert-danger">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach

</ul>

@endif

{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

	@include('admin.posts._form')

	<div class="form-group">
		{!! Form::label('tags', 'tags' ['class' => 'control-label']) !!}
		{!! Form::textarea('tags', null, ['class'=>'form-control'])!!}
		}
	</div>

	<div class="form-group">
		{!! Form::submit('Criar Post', ['class'=>'btn btn-primary']) !!}
	</div>

	

{!! Form::close() !!}

@endsection
