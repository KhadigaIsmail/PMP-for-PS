@extends('layout.app')

@section('content')
<div>

    <a href="{{route('create')}}">Main</a>
    <a href="{{ route('addproblemtoladder') }}">Add problem to ladder</a>
    <a href="{{ route('create') }}">Update Problemset</a>
    
    <h3>Please Write Ladder name</h3>
    <form method="post" action="{{ route('storeladder') }}">
        @csrf
        
        <input type="text" name="laddername">
        <textarea placeholder="Ladder Description"></textarea>
        <button type="submit">Add Ladder</button>
    </form>
</div>
@endsection