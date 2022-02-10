<x-layout>
  @include('_post-header')
	<h1>Authors</h1>
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
</x-layout>