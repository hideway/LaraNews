@extends('layouts.app')

@section('content')


     <div class="blog-header">
        <h1 class="blog-title">{{ $data->name }}</h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">{{ $data->name }}</h2>
            <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">Mark</a></p>
            {!! $data->content !!}
          </div>

        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection