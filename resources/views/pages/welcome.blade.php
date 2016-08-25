@extends('main')

@section('title', '| Home')

@section('content')
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron">
						<h1>Welcom to My Blog!</h1>
						<p class="lead">Thanks so much for visiting my blog! It is built with Laravel! Please read my Popular Post.</p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
					</div>
				</div>
			</div> <!-- end of header .row -->
			<div class="row">
				<div class="post">
					<div class="col-md-8">
						<div class="post">
							<h3>Post Title</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor euismod quam, ut vehicula felis semper vel...</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>

						<hr>

						<div class="post">
							<h3>Post Title</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor euismod quam, ut vehicula felis semper vel...</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>

						<hr>

						<div class="post">
							<h3>Post Title</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor euismod quam, ut vehicula felis semper vel...</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>

						<hr>

						<div class="post">
							<h3>Post Title</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor euismod quam, ut vehicula felis semper vel...</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-md-offset-1">
					<h2>Sidebar</h2>
				</div>
			</div>
@endsection
