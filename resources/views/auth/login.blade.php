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
            <form action="{{route('login')}}" method="POST" >
                @csrf
                <label>Codeforces:</label>
                <input name ="handel"type="text" placeholder="Codeforces Handel">
                <label>Password:</label>
                <input name ="password"type="text" placeholder="Password">
                
                <button type="submit"></button>
            </form>
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}">Register</p>

            
            
    </body>
</html>
