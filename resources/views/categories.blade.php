@extends('layout')

@section('content')
	<h1>Categories</h1>
  <ul> 
  	@foreach ( $categories as $category )
  		<li>
  			<a href="/categories/{{$category->slug}}">
  				{{ $category->name }}
  			</a>
  		</li>
  	@endforeach
  </ul>
@endsection