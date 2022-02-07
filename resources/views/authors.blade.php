@extends('layout')

@section('content')
	<h1>Categories</h1>
  
  <ul> 
  	@foreach ( $authors as $author )
  		<li>
  			<a href="/authors/{{$author->username}}">
  				{{ $author->name }}
  			</a>
  		</li>
  	@endforeach
  </ul>

  <p>
    <a href="/">Go Home</a>
  </p>
@endsection