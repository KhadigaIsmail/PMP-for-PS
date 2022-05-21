@extends('layout.app')
@section('content')
<div class=" justify-center m-4 text-center">
    <h1 class="font-bold  text-cyan-900 text-2xl">{{ $ladder->name }}</h1>
    @if($userJoined == 0)
    <div class=" bg-green-100 py-0.25 px-2  rounded-lg w-16 text-center justify-center items-center place-items-center relative ">
        
        <form method="POST" action="{{ route('joinladder',$ladder->id ) }}">
            @csrf
            <button>Join</button> 
        </form> 
    </div>
    @endif
    <p class=" text-center text-sm text-slate-500">{{ $ladder->description }}</p>
</div>
<div class=" flex justify-center"> 
    <div class="block w-4/12 bg-white p-6 rounded-lg ">
        
        

            <ul>
                @foreach($problems as $problem)
                
                <li 
                @if($problem->status == 0)class="w-full border-b-2 py-2 font-medium text-center bg-red-300"
                @elseif($problem->status == 1)class="w-full border-b-2 py-2 font-medium text-center bg-green-300"
                @else class="w-full border-b-2 py-2 font-medium text-center "@endif
                
                >
                    <a href="https://codeforces.com/problemset/problem/{{ $problem->number }}/{{ $problem->letter}}" target="_blank">{{  $problem->name  }}</a>    
                </li>
                @endforeach
            </ul>
            
    </div>
    </div>
    @endsection

