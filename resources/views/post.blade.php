@extends('layout')

@section('content')
  <article>
    <h1>
      {!! $post->title !!}    
    </h1>

    <p>
      By <a href="/authors/{{ $post->author->username }}">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}">
        {{ ucfirst($post->category->name )}}
      </a>
    </p>

    <div>
      {!! $post->body !!}
    </div>
  </article>
  <a href="/">Go Back</a>
@endsection