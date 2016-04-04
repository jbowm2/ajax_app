@extends('app')

@section('content')
<div class ="container">
    <div class="content">
        <div class="form-container" text-align="right">
            {!! Form::open(['route' => 'posts.store'])!!}
    		<div class="col-md-10">
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::label('body', 'Your Post:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::label('ajax_id', 'Ajax ID:') !!}
                    {!! Form::text('ajax_id', null, ['class' => 'form-control']) !!}
                </div>
            </div>


            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-submit']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop