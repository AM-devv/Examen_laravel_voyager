        
        @foreach ($posts as $post)
            <div class="row">
            <div class="col-xs-4"><a href="blog-post.html"><img src="img/blog/1.jpg" alt="Post Title"></a></div>
            <div class="col-xs-8">
                <div class="caption"><a href="blog-post.html">{{ $post->title }}</a></div>
                <div class="date">{{ $post->created_at->format('d F Y') }}</div>
                <div class="intro">
                    {!! $post->content !!}
                    <a href="blog-post.html">Read more...</a>
                </div>
            </div>
            </div>
        @endforeach
        