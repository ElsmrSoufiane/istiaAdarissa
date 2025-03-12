<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.html">
	<h1>istia adarissa</h1>
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">principale</a>
    </li>
    <li class="nav-item {{ request()->is('posts') ? 'active' : '' }}">
        <a class="nav-link" href="/posts">posts</a>
    </li>
    <li class="nav-item {{ request()->is('emplois') ? 'active' : '' }}">
        <a class="nav-link" href="/emplois">emplois</a>
    </li>
    @auth
    <li class="nav-item {{ request()->is('createpost') ? 'active' : '' }}">
        <a class="nav-link" href="/createpost">ajouter un post</a>
    </li>
    <li class="nav-item {{ request()->is('createemploi') ? 'active' : '' }}">
        <a class="nav-link" href="/createemploi">ajouter un emploi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{'/admin/'.Auth::user()->id}}" ><img  src="{{asset( Auth::user()->image) }}" style="width: 30px; height: 30px; border-radius: 50%;"><br>
        {{ Auth::user()->name }}  </a>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="/logout">déconnecter</a>
    </li>
    @endauth
    @guest
    <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
        <a class="nav-link" href="/login">se connecter</a>
    </li>
    @endguest
</ul>

		<!-- End Menu -->
		<!-- Begin Search -->
		
		<!-- End Search -->
	</div>
</div>
</nav>