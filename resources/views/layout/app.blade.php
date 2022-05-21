<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="{{asset('/images/icon.png')}}" class="bg-cyan-800"/>
        <title>PMP for PS</title>

       
    </head>
    <body class="bg-slate-200">
        <nav class=" bg-cyan-800 flex p-4  justify-between mb-8">
            <ul class="flex items-center">
                <li class="font-sans text-white cursor-pointer ">
                    <a href="{{ route('index') }}">
                    <img src ="{{asset('/images/icon.png')}}" class="w-20 h-10 mr-2 ">
                    </a>
                </li>
                @auth
                <li class="font-sans text-white font-semibold">
                    <a href="{{ route('userladders') }}" class="p-3">My Ladders</a>
                </li>
                @endauth
               
                <li class="font-sans text-slate-50 font-semibold">
                    <a href="{{ route('exploreladders') }}" class="p-3  hover:underline-offset-8">Explore Ladders</a>
                </li>
               
                @auth
                    @if(auth()->user()->admin == 1)
                        <li class="font-sans text-white">
                            <a href="{{ route('create') }}" class="p-3">Admin</a>
                        </li>
                    @endif
                @endauth
                
               
            </ul>

            <ul class="flex items-center">
            @if(auth()->user())
                    <li class="font-sans text-white font-semibold">
                        <a href="" class="p-3">{{auth()->user()->handel}}</a>
                    </li>
                    <li class="font-sans text-white font-semibold">
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
            @endif

                @guest
                    <li class="font-sans text-white font-semibold">
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li class="font-sans text-white font-semibold">
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
                
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
