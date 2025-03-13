@extends("welcome")
@section("content")
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container">
	
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	
	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>posts</span></h2>
	</div>
	<div class="card-columns listrecent">
	@foreach($posts as $post)
	<div class="card" style="overflow: hidden;">
			<a href="{{'/post/'.$post->id}}">
				<img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="{{'/post/'.$post->id}}">{{$post->titre}}</a></h2>
				<h4 class="card-text">{{$post->description}}</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						@foreach($users as $user)
						@if($user->id == $post->user_id)
						<a href="{{'/auteur/'.$user->id}}"><img class="author-thumb" src="{{$user->image}}" alt="Sal"></a>
						</span>
						<span class="author-meta">
						
						<span class="post-name"><a href="{{ url('/auteur/'.$user->id) }}">{{$user->name}}</a></span><br/>
						@endif
						@endforeach
						<span class="post-date">{{$post->created_at}}</span><span class="dot"></span><span class="post-read"></span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
					</div>
				</div>
			</div>
		</div>
@endforeach
		<!-- begin post -->
	
	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	<!-- Begin Footer
	================================================== -->
	
	<!-- End Footer
	================================================== -->

</div>
@endsection