@extends('admin.create')

@section('admin-content')
<div class="flex justify-center">
<div class="items-center w-1/2">

   
    
    <h3 class="font-semibold text-lg m-8 text-center">Please Write Ladder name</h3>
    <form method="post" action="{{ route('addproblemtoladder') }}">
        @csrf
        
        <input type="text" name="problemnumber"  placeholder="Problem ID"
        class="bg-gray-100 border-2 w-full p-4 rounded-lg  ">
        
        <select name="laddername"  class="bg-gray-100 border-2 w-auto p-4 rounded-lg block">
            @foreach ($ladder as $l )
            <option value="{{ $l->name }}">{{ $l->name}}</option>
            @endforeach
        </select>

         <button type="submit" 
         class="border-2 w-full p-3 rounded-lg bg-gray-400 hover:bg-cyan-800 hover:text-white font-semibold">
            Add Ladder</button>
    </form>
</div>
</div>
@endsection