@extends('layout.app')

@section('content')
        <div>
            
            <form action="{{route('showproblems')}}" method="POST" >
                @csrf
               <h3>Write your Handel</h3>
                <input name ="handel"type="text" placeholder="Codeforces Handel">
                
                <button type="submit"></button>
            </form>
        </div>
@endsection