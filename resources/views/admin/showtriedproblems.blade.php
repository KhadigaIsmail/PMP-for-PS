<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Project</title>

       
    </head>
    <body class="bg-gray-200">

        
        <h3>ACCEPTED</h3>
        @foreach ($accTags as $key => $a )
            <p color="green">{{ $key }}</p> 
            @foreach ($accTags[$key] as $t  )
            <p style="color:blue;">{{ $t }}</p>
                
            @endforeach 
        @endforeach

        <h3>Wrong Answer</h3>
        @foreach ($wa as $key => $a )
            <p>{{ $key }}</p>  
        @endforeach
            
    </body>
</html>
