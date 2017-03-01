@extends('layouts.app')

@section('content')

<<<<<<< HEAD

     <div class="blog-header">
        <h1 class="blog-title">{{ $data->name }}</h1>
        <p class="lead blog-description"></p>
      </div>
=======
 	<div class="blog-header">
        <h1 class="blog-title">{{ $data->name }}</h1>
    </div>
>>>>>>> a66f0644a5c509d04d97f37817f80691ac84e688

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
<<<<<<< HEAD
            <h2 class="blog-post-title">{{ $data->name }}</h2>
            <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">Mark</a></p>
            {!! $data->content !!}
          </div>

=======
	        <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">Mark</a></p>
            {!! $data->content !!}
        
>>>>>>> a66f0644a5c509d04d97f37817f80691ac84e688
        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection