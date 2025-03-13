@extends("welcome")
@section("content")
<div class="container">
	<div class="row">

		<!-- Begin Post -->
		<div>
			<div class="mainheading">

				<!-- Begin Top Meta -->
				@foreach($users as $user)
				@if($user->id == $emploi->user_id)
				<div class="row post-top-meta">
					<div class="col-md-2">
						<a href="{{ url('/auteur/'.$user->id) }}">
							<img class="author-thumb" src="{{ asset($user->image) }}" alt="{{ $user->name }}">
						</a>
					</div>
					<div class="col-md-10">
						<a class="link-dark" href="{{ url('/auteur/'.$user->id) }}">{{ $user->name }}</a>
						<br>
						<span class="author-description">{{ $user->description }}</span><br>
						<span class="post-date">publié le: {{ $emploi->created_at }}</span><span class="dot"></span><span class="post-read"></span>
					</div>
				</div>
				@endif
				@endforeach
				<h1 class="posttitle">{{ $emploi->titre }}</h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="{{ asset('storage/'.$emploi->image) }}" alt="">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>{{ $emploi->description }}</p>
				@isset($emploi->note)
				<blockquote>
					{{ $emploi->note }}
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
@endsection
