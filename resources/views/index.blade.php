@extends('layout.app')

@section('content')
        <div>
            <a href="{{ route('exploreladders') }}">Your Ladders</a>
            <a href="{{ route('exploreladders') }}">Explore Ladders</a>

            <form action="{{route('showproblems')}}" method="POST" >
                @csrf
               <h3>Write your Handel</h3>
                <input name ="handel"type="text" placeholder="Codeforces Handel">
                
                <button type="submit"></button>
            </form>
        </div>
@endsection