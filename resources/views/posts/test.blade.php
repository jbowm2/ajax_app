@extends('layout')

@section('content')
		<div class="container">
            <div class="content">
                <div class="title">Ajax Works!</div>
                <button type="button" class="btn btn-default">Lets Try a Post Request in Ajax!</button>

            </div>
        </div>

@stop

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "create", success: function(result){
            $(".container").html(result);
        }});
    });
});

</script>

@stop