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
            <form action="{{route('register')}}" method="POST" >
                @csrf
                <label>Codeforces:</label>
                <input name ="handel"type="text" placeholder="Codeforces Handel"  value="{{old('handel')}}">
                @error('handel') 
                <p>{{$message}}</p>
                @enderror

                <label>Email</label>
                <input type="text" name="email" id="emil" placeholder="Your email" value="{{old('email')}}">
                @error('email') 
                <p>{{$message}}</p>
                @enderror

                <label>Password:</label>
                <input name ="password"type="text" placeholder="Password">
                @error('password') 
                <p>{{$message}}</p>
                @enderror

                <label>Confirm Password:</label>
                <input name ="password_confirmation"type="text" placeholder="Password">
                @error('name') 
                <p>{{$message}}</p>
                @enderror
                <button type="submit">Register</button>
            </form>
            <p>Have an Account?</p><a href="{{ route('login') }}">Log in</a>

            
            
    </body>
</html>
