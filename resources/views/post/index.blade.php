@extends('layouts.app')

@section('content')


@if($page->body === null)
  <div class="blog-header">
        <h1 class="blog-title">{{ $page->title }}</h1>
        <p class="lead blog-description">{{ $page->description }}</p>
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
	
@else
 <div class="blog-header">
        <h1 class="blog-title">{{ $page->title }}</h1>
        <p class="lead blog-description">{{ $page->description }}</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">last title</h2>
          </div>
          {{ $page->body }}

        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
@endif

@endsection