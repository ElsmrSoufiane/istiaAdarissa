@extends("welcome")
@section("content")
<div class="container">
	<div class="row">

		<!-- Begin Fixed Left Share -->
		
		<!-- End Fixed Left Share -->

		<!-- Begin Post -->
		<div >
			<div class="mainheading">

				<!-- Begin Top Meta -->
				<div class="row post-top-meta">
					<div class="col-md-2">
						
					
						<a ><img class="author-thumb" src="{{ asset($user->image) }}" alt="{{$user->name}}"></a>
					</div>
					<div class="col-md-10">
						<a class="link-dark" >{{$user->name}}</a>
						<span class="author-description">{{$user->description}}</span>

					</div>
				</div>
	@include("cherche")
			
				<!-- End Top Menta -->
				<section class="recent-posts">
	<div class="section-title">
		<h2><span>posts de {{$user->name}} </span></h2>
	</div>
	<div class="card-columns listrecent">
	@foreach($posts as $post)
	<div class="card @foreach($groups as $group)
							@if($group->id == $post->groupe_id)
							{{$group->name}}
							@endif
							@endforeach " style="overflow: hidden;">
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
						<a href="{{'/auteur/'.$user->id}}"><img class="author-thumb" src="{{asset($user->image)}}" alt="{{$user->name}}"></a>
						</span>
						<span class="author-meta">
						
						<span class="post-name"><a href="{{ url('/auteur/'.$user->id) }}">{{$user->name}}</a></span><br/>
						@endif
						@endforeach
						<span class="post-date">{{$post->created_at}}</span><span class="dot"></span><span class="post-read"></span>
						</span>
						<span class="post-read-more">
							<a href="#" title="Read Story">
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
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>emplois de {{$user->name}}</span></h2>
	</div>
	<div class="card-columns listrecent">
	@foreach($emplois as $emploi)
	<div class="card 
	@foreach($groups as $group)
							@if($group->id == $emploi->groupe_id)
							{{$group->name}}
							@endif
							@endforeach
	" style="overflow: hidden;">
			<a href="{{'/emploi/'.$emploi->id}}">
				<img class="img-fluid" src="{{asset('storage/'.$emploi->image)}}" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="{{'/emploi/'.$emploi->id}}">{{$emploi->titre}}</a></h2>
				<h4 class="card-text">{{$emploi->description}}</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						@foreach($users as $user)
						@if($user->id == $emploi->user_id)
						<a href="{{'/auteur/'.$user->id}}"><img class="author-thumb" src="{{asset($user->image)}}" alt="Sal"></a>
						</span>
						<span class="author-meta">
						
						<span class="post-name"><a href="{{ url('/auteur/'.$user->id) }}">{{$user->name}}</a></span><br/>
						@endif
						@endforeach
						<span class="post-date">{{$emploi->created_at}}</span><span class="dot"></span><span class="post-read"></span>
						</span>
						<span class="post-read-more"><a href="#" title="Read Story">
						@foreach($groups as $group)
							@if($group->id == $emploi->groupe_id)
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

</div>
@endsection