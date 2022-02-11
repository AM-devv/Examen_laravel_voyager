@extends('welcome')

@section('content')

<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                
                <!-- Slide des works -->
                @include('works.slide', ['works' => \App\Models\Work::orderBy('created_at','desc')->take(3)->get()])

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->





		<!-- Our Portfolio -->

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">

				<div class="section-title">
				<h1>Our Recent Works</h1>
				</div>

                    <!-- Liste des works -->
                    @include('works.index', ['works' => \App\Models\Work::orderBy('created_at','desc')->take(3)->get()])
			
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->

<hr>

<!-- Our Articles -->
<div class="section">
  <div class="container">
    <div class="row">
      <!-- Featured News -->
      <div class="col-sm-6 featured-news">
        <h2>Latest Blog Posts</h2>
            
        <!-- Liste des posts -->
        @include('posts.index', ['posts'=> \App\Models\Post::orderBy('created_at','desc')->take(3)->get()])
      </div>
      <!-- End Featured News -->


      <!-- Latest News FB -->
      <div class="col-sm-6 latest-news">
        <h2>Lastest Twitter News</h2>
        <a class="twitter-timeline" data-height="800" href="https://twitter.com/PascalL79487231?ref_src=twsrc%5Etfw">Tweets by PascalL79487231</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <!-- End Featured News -->
    </div>
  </div>
</div>

@endsection