@extends("welcome")
@section("content")
<center><h1>modifier un emploi</h1></center>
<form method='POST'  action="{{'/updateemploi/'.$id}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label >titre:</label>
    <input value="{{$emploi->titre}}" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre">
    
  </div>
  @error("titre")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">description:</label>
    <textarea  rows=5 cols=10 name="description" type="password" class="form-control" id="exampleInputPassword1" placeholder="description">{{$emploi->description}}</textarea>
  </div>
  
  @error("description")
    <div class="alert alert-danger">
        {{ $message }}
        </div>
        @enderror
        <div class="form-group">
    <label for="exampleInputPassword1">note:(optionel):</label>
    <textarea 
    
          rows=5 cols=10 name="note" type="password" class="form-control" id="exampleInputPassword1" placeholder="note(optionel)">@isset($emploi->note){{$emploi->note}}@endisset</textarea>
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





@endsection