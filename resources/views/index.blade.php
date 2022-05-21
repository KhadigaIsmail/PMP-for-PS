@extends('layout.app')

@section('content')
        <div>
            @auth
                <div>
                    @auth
                        <h1>Recent Joind Ladder</h1>
                        @foreach ($recentlyJoinedLadders as $ladder )
                            <a  href="{{route('exploreladderid',$ladder->id) }}">{{ $ladder->name}}</a>
                        @endforeach
                    @endauth
                </div>
                @endauth
                @guest
                <div class="flex flex-col justify-items-center text-center">
                    <h1 class="text-2xl m-8">Practice Makes Perfect for Problem Solving</h1>
                    <p>existed to help you to focus on a certain topic by providing ladders in various topics and various difficulties <Br/>
                        We believe the practice is the only grantueed way to RAISE <br/>
                        Wish You Best of Luck Achieving Your Dreams 
                    </p>   
                </div>
            @endguest
        </div>
@endsection