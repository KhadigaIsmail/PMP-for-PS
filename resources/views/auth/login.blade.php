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
            @if(session('status'))
                <p>{{ session('status') }}</p>
            @endif
            <form action="{{route('login')}}" method="POST" >
                @csrf
                <label>Email</label>
                <input name ="email"type="text" placeholder="Email">
                @error('email') 
                <p>{{$message}}</p>
                @enderror 

                <label>Password:</label>
                <input name ="password"type="text" placeholder="Password">
                @error('password') 
                <p>{{$message}}</p>
                @enderror


                <input type="checkbox" name="remember" id="remember">

                <label for="remember">Remember me</label>
                <button type="submit">Log in</button>
            </form>
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}">Register</p>

            
            
    </body>
</html>
