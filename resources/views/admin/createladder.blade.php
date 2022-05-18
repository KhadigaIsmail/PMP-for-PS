<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Project</title>

       
    </head>
    <body class="bg-gray-200">
  
        <a href="{{route('create')}}">Main</a>
        <a href="{{ route('viewstoreproblemtoladder') }}">Add problem to ladder</a>
        <a href="{{ route('create') }}">Update Problemset</a>
        
        <h3>Please Write Ladder name</h3>
        <form method="post" action="{{ route('storeladder') }}">
            @csrf
            
            <input type="text" name="laddername">
        </form>
    </body>
</html>