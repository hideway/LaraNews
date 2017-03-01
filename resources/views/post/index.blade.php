@extends('layouts.app')

@section('content')

  <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

        @foreach($data as $post)
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->name }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">Mark</a></p>
            {!! $post->content !!}
          </div>
        @endforeach

        @include('pagination.default', ['paginator' => $data])

        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection