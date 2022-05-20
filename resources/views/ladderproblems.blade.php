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
            <h3>{{ $ladder->name }}</h3>
            <p>{{ $ladder->description }}</p>
            @if($userJoined == 0)
                <form method="POST" action="{{ route('joinladder',$ladder->id ) }}">
                    @csrf
                <button>Join</button>  
            @endif
            <ul>
                @foreach ($problems as $problem)     
                <li>
                    <a href="https://codeforces.com/problemset/problem/{{ $problem->number }}/{{ $problem->letter}}" target="_blank">{{  $problem->name  }}</a>    
                </li>
                @endforeach
            </ul>
            
        </div>
    </body>
</html>
