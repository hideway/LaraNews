<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      @foreach($nav as $n)
      	<a class="blog-nav-item {{ (Request::path() == $n->slug) ? 'active' : '' }}" href="/{{ $n->slug }}">{{ ucfirst($n->slug) }}</a>
      @endforeach
    </nav>
  </div>
</div>