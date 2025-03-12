@extends('welcome')
@section('content')
<center><h1>se connecter</h1></center>
<form method='POST'  action="{{ route('storelogin') }}" >
    @csrf
<div class="form-group">
    <label >login:</label>
    <input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="login">
    
  </div>
  @if($errors->has('login'))
<div class="alert alert-danger">
    {{ $errors->first('login') }}
</div>
@endif
  <div class="form-group">
    <label >mot de passe:</label>
    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mot de passe">
    
  </div>
 
  <input type="submit" class="btn btn-primary" value="se connecter" />
</form>
@endsection