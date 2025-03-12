
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
    
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>