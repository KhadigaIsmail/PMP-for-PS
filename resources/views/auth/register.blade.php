@extends('layout.app')
@section('content')

        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-6 rounded-lg">

            <form action="{{route('register')}}" method="POST" >
                @csrf
                <div class="mb-4">
                    <label class="sr-only">Codeforces:</label>
                    <input name ="handel"type="text" placeholder="Codeforces Handel" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg " value="{{old('handel')}}">
                    @error('handel') 
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only">Email</label>
                    <input type="text" name="email" id="emil" placeholder="Your email"  value="{{old('email')}}"  
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                    @error('email') 
                    <p>{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label class="sr-only">Password:</label>
                    
                    <input name ="password"type="text" placeholder="Password"  
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                    @error('password') 
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">

                    <label class="sr-only">Confirm Password:</label>
                    <input name ="password_confirmation" type="text" placeholder="Password"  
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
                    @error('name') 
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" 
                    class="border-2 w-full p-3 rounded-lg bg-gray-400 hover:bg-cyan-800 hover:text-white font-semibold">
                    Register
                </button>
            </form>
            
            <div class="pt-3 font-semibold">
            <label >Have an Account?</label><a href="{{ route('login') }}" class="inline-block text-blue-400  ml-1 ">Log in</label>
            </div>
            </div>
        </div>
            
@endsection