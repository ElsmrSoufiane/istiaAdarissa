
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
<title>Mediumish - A Medium style template by WowThemes.net</title>
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
<center><h1>ajouter un post</h1></center>
<form method='POST'  action="{{'/updatepost/'.$id}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label >titre:</label>
    <input value="{{$post->titre}}" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre">
    
  </div>
  @error("titre")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">description:</label>
    <textarea  rows=5 cols=10 name="description" type="password" class="form-control" id="exampleInputPassword1" placeholder="description">{{$post->description}}</textarea>
  </div>
  
  @error("description")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">note:(optionel):</label>
    <textarea 
    
          rows=5 cols=10 name="note" type="password" class="form-control" id="exampleInputPassword1" placeholder="note(optionel)">@isset($post->note){{$post->note}}@endisset</textarea>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label"  >image:</label> <br>
      <input type="file" name="image"  class="form-check-input">
      
  </div>
  @error("image")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <br><br>
  <button type="submit" class="btn btn-primary">modifier</button>
</form>





<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>