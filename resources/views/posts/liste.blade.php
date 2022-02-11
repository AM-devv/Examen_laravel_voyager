@foreach ($posts as $post)

                    <!-- Blog Post Excerpt -->
                    <div class="col-sm-6">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2>{{ $post->title }}</h2>
							</div>

							<div class="single-post-image">
								<img src="img/blog/2.jpg" alt="Post Title">
							</div>

							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{ $post->created_at }} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
							</div>

							<div class="single-post-content">
								<p>
                                {!! $post->content !!}
								</p>
							<a href="blog-post.html" class="btn">Read more</a>
							</div>
						</div>
					</div>
					<!-- End Blog Post Excerpt -->

@endforeach