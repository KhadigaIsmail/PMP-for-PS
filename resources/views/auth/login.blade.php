@extends('layout.app')
@section('content')
    <div class="flex justify-center">   
        <div class="w-4/12 bg-white p-6 rounded-lg">
        @if(session('status'))
            <p class="text-red-500">{{ session('status') }}</p>
        @endif
            
        <form action="{{route('login')}}" method="POST" >
            @csrf
            <div class="mb-4">
                <label class="sr-only">Email</label>
                <input name ="email"type="text" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('email') 
                <p @error('email') class="text-red-500" @enderror>{{$message}}</p>
                @enderror 
            </div>

            <div class="mb-4">
                <label class="sr-only">Password:</label>
                <input name ="password"type="password" placeholder="Password" class="bg-gray-100 border-2 focus-visible:border-cyan-500 @error('password') border-red-500 @enderror w-full p-4 rounded-lg">
                @error('password') 
                <p @error('password') class="text-red-500" @enderror>{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="m-2">
                    <label for="remember" class="font-sans" >Remember me</label>
                </div>
            </div>

            <button type="submit" class="border-2 w-full p-3 rounded-lg bg-gray-400 hover:bg-cyan-800 hover:text-white font-semibold">Log in</button>
        </form>
        <div class="flex items-center font-semibold">
            <label >Don't have an account?</label>
            <a href="{{ route('register') }}">Register</a>
        </div>

        </div>
    </div>       
@endsection