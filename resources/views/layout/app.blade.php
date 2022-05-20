<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Project</title>

       
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                @auth
                <li>
                    <a href="{{ route('userladders') }}" class="p-3">Your Ladders</a>
                </li>
                @endauth
                <li>
                    <a href="{{ route('exploreladders') }}" class="p-3">Explore Ladders</a>
                </li>
                @auth
                    @if(auth()->user()->admin == 1)
                        <li>
                            <a href="{{ route('create') }}" class="p-3">Admin</a>
                        </li>
                    @endif
                @endauth
                
               
            </ul>

            <ul class="flex items-center">
            @if(auth()->user())
                    <li>
                        <a href="" class="p-3">{{auth()->user()->handel}}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
            @endif

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
                
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
