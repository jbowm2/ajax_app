@extends('app')

@section('content')

	<div class="col-md-6 col-md-offset-3">

		{!! Form::open(['method'=>'GET','url'=>'display']) !!}
			{!! Form::input('search', 'q', null, ['placeholder' =>'Search...']) !!}
				@if($posts->count())
					@foreach($posts as $post)
					<h1>{{ $post->title }}</h1>
					<h4>{{ $post->body }}</h4>
					<h5>{{ $post->ajax_id }}</h5>
					@endforeach
				@else
					<p>No Posts returned.</p>
				@endif	
		{!! Form::close() !!}
	</div>



@stop