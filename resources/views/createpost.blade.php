@extends('welcome')
@section('content')
<center><h1>ajouter un poste</h1></center>
<form method='POST'  action="/storepost" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label >titre:</label>
    <input name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre">
    
  </div>
  @error("titre")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">groupe:</label>
    <select name="groupe_id" class="form-control" id="exampleInputPassword1">
      @foreach($groups as $groupe)
      <option value="{{$groupe->id}}">{{$groupe->name}}</option>
      @endforeach
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description:</label>
    <textarea rows=5 cols=10 name="description" class="form-control"  placeholder="description"></textarea>
  </div>
  
  @error("description")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">note:(optionel):</label>
    <textarea rows=5 cols=10 name="note" type="password" class="form-control" id="exampleInputPassword1" placeholder="note(optionel)"></textarea>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">image:</label> <br>
      <input type="file" name="image" class="form-check-input">
      
  </div>
  @error("image")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror <br>
  <button type="submit" class="btn btn-primary">ajouter</button>
</form>
@endsection