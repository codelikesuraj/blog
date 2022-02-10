<x-layout>
  @include('_post-header')
  @foreach ($posts as $post)
    <article>
      <h1>
        <a href="/posts/{{ $post->slug }}">
            {!! $post->title !!}
        </a>
      </h1>

      <div>
          {!! $post->excerpt !!}
      </div>

      <p>
        <a href="/">Home</a> > <a href="/categories">Categories</a>
      </p>
    </article>
   @endforeach

</x-layout>