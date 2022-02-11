            <ul class="grid cs-style-3">
                @foreach ($works as $work)
                    <div class="col-md-4 col-sm-6">
                        <figure>
                            <img src="{{ asset('storage/' . $work->image) }}" alt="img04">
                            <figcaption>
                                <h3>{{ $work->title }}</h3>
                                <span>{{ $work->client->name }}</span>
                                <a href="{{ route('detail', ['id' => $work->id, 'title' => $work->title]) }}">Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach    
			</ul>