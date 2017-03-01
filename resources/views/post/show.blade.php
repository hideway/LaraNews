@extends('layouts.app')

@section('content')

 	<div class="blog-header">
        <h1 class="blog-title">{{ $data->name }}</h1>
    </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
	        <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">Mark</a></p>
            {!! $data->content !!}
        
        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection