
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
@extends("welcome")
@section("content")
<table class="table table-striped ">
    <thead >
        <tr>
          
            <th scope="col">titre</th>
           
            <th scope="col">date de création</th>
            
            <th scope="col" class="text-center">Action</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            
            <td>{{ $post->titre }}</td>
            
            <td>{{ $post->created_at }}</td>
            
            <td>     <div style="display: flex;justify-content: space-around;">
                <a href="{{ url('/editpost/'.$post->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ url('/deletepost/'.$post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
</div>
            </td>
        </tr>
        @endforeach
        @foreach($emplois as $emploi)
        <tr>
            
            <td>{{ $emploi->titre }}</td>
            
            <td>{{ $emploi->created_at }}</td>
            
            <td>
                <div style="display: flex;justify-content: space-around;">
                <a href="{{ url('/editemploi/'.$emploi->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ url('/deleteemploi/'.$emploi->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></div>
            </td></tr>
             @endforeach
</tbody></table>
    
@endsection