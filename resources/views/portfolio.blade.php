@extends('welcome')

@section('content')

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Portfolio</h1>
					</div>
				</div>
			</div>
		</div>


        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2>We are leading company</h2>
						<h3>Specializing in Wordpress Theme Development</h3>
						<p>
							Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis.
						</p>

					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">

			<!-- Liste des works -->
            @include('works.index', ['works' => \App\Models\Work::orderBy('created_at','desc')->take(6)->get()])


				</div>

				<ul class="pager">
				  <li><a id="older-works" href="#">More works</a></li>
				</ul>

			</div>
		</div>

@endsection

@section('script')
	<script src="{{ asset('js/works/lastest.js') }}"></script>
@endsection