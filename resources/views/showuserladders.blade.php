@extends('layout.app')
@section('content')
<div>
    <div class=" flex justify-center"> 
    <div class="w-4/12 bg-white p-6 rounded-lg ">
    <ul>
        @foreach ($ladders as $ladder)     
        <li class="w-full border-b-2 py-2 font-medium">
            <a href="{{route('exploreladderid',$ladder->id) }}">{{ $ladder->name }}</a> 
            
        </li>
        @endforeach
    </ul>
    </div>

</div>
</div>
@endsection