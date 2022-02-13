@extends('welcome')

@section('content')

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Product Details</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src="{{ asset('storage/' . $work->image) }}" alt="Item Name">
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h2>{{ $work->title }}</h2>
						<h3>Quick Overview</h3>
	    				<p>
						{{ $work->content }}
						</p>
	    				<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.
						</p>
						<h3>Project Details</h3>
						<p><strong>Client: </strong>{{ $work->client->name }}</p>
						<p><strong>Date: </strong>{{ $work->created_at->format('d F Y') }}</p>
						<p><strong>Tags: </strong>
					@foreach ($work->tags as $tag)
						<li>{{ $tag->name }}</li>
					@endforeach
					</p>
	    			</div>
	    			<!-- End Product Summary & Options -->

	    		</div>
			</div>
		</div>

<hr>

        <div class="section">
	    	<div class="container">
				<div class="row">

				<div class="section-title">
				<h1>Similar Works</h1>
				</div>

				@include('works.index', ['works' => \App\Models\Work::orderBy('created_at','desc')->take(3)->get()])


				</div>
			</div>
		</div>

@endsection