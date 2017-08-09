
    <div class="navbar navbar-inverse bg-inverse">
      <div class="container d-flex justify-content-between">
	      <nav class="nav blog-nav">
	      	@if (Auth::check())
	        	<a class="nav-link" href="#">{{ Auth::user()->name }}</a>
	        @endif
	        </nav>
        <a href="#" class="navbar-brand">Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>