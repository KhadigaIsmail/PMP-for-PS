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
                <div>
                    <h1>Why Does This Site Exist</h1>   
                </div>
            @endguest
        </div>
@endsection