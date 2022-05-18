<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PMP for PS</title>

       
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <form action="{{route('showproblems')}}" method="POST" >
                @csrf
                <h3>Please Enter User Handel</h3>
                <input name ="handel"type="text" >
            </form>

            
            
    </body>
</html>
