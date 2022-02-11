@extends('welcome')

@section('content')

<!-- Page Title -->
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Blog</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					

                        <!-- Liste des posts -->
            @include('posts.liste', ['posts' => \App\Models\Post::orderBy('created_at','desc')->take(4)->get()])

								<!-- Pagination -->
								<div class="pagination-wrapper ">
									<ul class="pagination pagination-sm">
										<li class="disabled"><a href="#">Previous</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>

				</div>
			</div>
	    </div>

@endsection