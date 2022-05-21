@extends('layout.app')

@section('content')
<div>
    <div class="text-cyan-700 flex justify-center font-semibold  ">
        <a href="{{ route('addproblemtoladder') }}" class="p-1 p-x-2 m-5 hover:rounded-lg   hover:bg-slate-300">Add problem to ladder</a>
        <a href="{{ route('viewaddladder') }}" class="p-1 p-x-2 m-5 hover:rounded-lg hover:bg-slate-300">Add Ladder</a>
        <a href="{{ route('create') }}" class="p-1 p-x-2 m-5 hover:rounded-lg hover:bg-slate-300"s>Update Problemset</a>
    </div>
    <div>
        @yield('admin-content')
    </div>
</div>
@endsection