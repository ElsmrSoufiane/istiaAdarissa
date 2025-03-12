<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
<title>istia adarissa</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('assets/css/mediumish.css') }}" rel="stylesheet">
</head>
<body>
@include("navbar")
<div class="container">
	<div class="row">

		<!-- Begin Post -->
		<div>
			<div class="mainheading">

				<!-- Begin Top Meta -->
				@foreach($users as $user)
				@if($user->id == $post->user_id)
				<div class="row post-top-meta">
					<div class="col-md-2">
						<a href="{{ url('/auteur/'.$user->id) }}">
							<img class="author-thumb" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
						</a>
					</div>
					<div class="col-md-10">
						<a class="link-dark" href="{{ url('/auteur/'.$user->id) }}">{{ $user->name }}</a>
						<br>
						<span class="author-description">{{ $user->description }}</span>
						<br><span class="post-date">publié le: {{ $post->created_at }}</span><span class="dot"></span><span class="post-read"></span>
					</div>
				</div>
				@endif
				@endforeach
				<h1 class="posttitle">{{ $post->titre }}</h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>{{ $post->description }}</p>
				@isset($post->note)
				<blockquote>
					{{ $post->note }}
				</blockquote>
				@endisset
			</div>
			<!-- End Post Content -->

		</div>
		<!-- End Post -->

	</div>
</div>
<!-- End Article -->

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
