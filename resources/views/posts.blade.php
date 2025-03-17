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
		<h2><span>postes</span></h2>
	@include("cherche")

	</div>
	<div class="card-columns listrecent">
	@foreach($posts as $post)
	<div class="card @foreach($groups as $group)
							@if($group->id == $post->groupe_id)
							{{$group->name}}
							@endif
							@endforeach" style="overflow: hidden;">
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
						<span class="post-read-more"><a href="#" title="Read Story">
							@foreach($groups as $group)
							@if($group->id == $post->groupe_id)
							{{$group->name}}
							@endif
							@endforeach
					</a></span>
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