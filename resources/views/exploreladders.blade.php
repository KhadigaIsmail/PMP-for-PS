<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PMP for PS</title>

       
    </head>
    <body class="bg-gray-200">
        <div>
            <ul>
                @foreach ($ladders as $ladder)     
                <li>
                    <a href="{{route('exploreladderid',$ladder->id) }}">{{ $ladder->name }}</a> 
                    <form method="POST" action="{{ route('joinladder',$ladder->id ) }}">
                        @csrf
                    <button>Join</button>    
                    </form>   
                </li>
                @endforeach
            </ul>
            
        </div>
    </body>
</html>
