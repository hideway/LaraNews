@extends('layouts.app')

@section('content')

  <div class="blog-header">
        <h1 class="blog-title">Creat a new post</h1>
   </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

       
          <div class="blog-post">
            @include('post.form')
          </div>
        
        </div><!-- /.blog-main -->

        @include('elements.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection