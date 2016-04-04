@extends('layout')

@section('content')

<input class="typeahead">




@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>

var movies = new Bloodhound({
  datumTokenizer: function(datum) {
    return Bloodhound.tokenizers.whitespace(datum.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  remote: {
    wildcard: '%QUERY',
    url: '',
    transform: function(response) {
      // Map the remote source JSON array to a JavaScript object array
      return $.map(response.results, function(post) {
        return {
          value: post.name
        };
      });
    }
  }
});

// Instantiate the Typeahead UI
$('.typeahead').typeahead(null, {
  display: 'value',
  source: posts
});

</script>

@stop