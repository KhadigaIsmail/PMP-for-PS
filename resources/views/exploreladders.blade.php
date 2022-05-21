@extends('layout.app')
@section('content')
<div class=" flex justify-center"> 
    <div class="w-4/12 bg-white p-6 rounded-lg ">
        
        @error('guest')
        <h3>{{ $message }}</h3>    
        @enderror

        <ul>
            @foreach ($ladders as $ladder)     
                <li class="w-full border-b-2 py-2 font-medium">
                    <a href="{{route('exploreladderid',$ladder->id) }}">{{ $ladder->name }}</a> 
                    @if($ladder->joined==0)
                        <div class="inline-block bg-green-500 py-0.25 px-2  rounded-lg justify-end">
                            <form method="POST" action="{{ route('joinladder',$ladder->id ) }}">
                                @csrf
                                <button>Join</button>    
                            </form>   
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
