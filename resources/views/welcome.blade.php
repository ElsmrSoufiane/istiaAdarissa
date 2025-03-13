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
<!-- Begin Nav
================================================== -->

<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
@yield("content")
<!-- /.container -->
 <div class="container" >
<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2025 istia adarissa
		</p>
		<p class="pull-right">

		</p>
		<div class="clearfix">
		</div>
	</div></div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
