                
            @foreach ($works as $work)    
                <div class="item @if ($loop->first) active @endif" style="background-image: url('{{ asset('storage/' . $work->image) }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">{{ $work->title }}</h2>
                                    <p class="animation animated-item-2">{{ $work->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            @endforeach