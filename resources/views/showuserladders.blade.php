@extends('layout.app')
@section('content')
<div>
    
    <ul>
        @foreach ($ladders as $ladder)     
        <li>
            <a href="{{route('exploreladderid',$ladder->id) }}">{{ $ladder->name }}</a> 
            
        </li>
        @endforeach
    </ul>
    
</div>
@endsection