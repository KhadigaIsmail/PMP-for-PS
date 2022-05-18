<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Project</title>

       
    </head>
    <body class="bg-gray-200">
        <a href="{{ route('create') }}">Add problem to ladder</a>
        <a href="{{ route('viewaddladder') }}">Add Ladder</a>
        <a href="{{ route('updateproblemset') }}">Update Problemset</a>
        
        <h3>Please add problem number</h3>
        <form method="post" action="{{ route('addproblemtoladder') }}">
            @csrf

            <input type="text" name="problemnumber" placeholder="Problem Name">
            <input  name="laddername" placeholder="Ladder Name" list="laddernames">
           
            <datalist id="laddernames">
                @foreach($ladder as $l)
                <option value="{{ $l->name }}">
                @endforeach
                
            </datalist>
            <button type="submit">Submmit</button>
        </form>
        
    </body>
</html>