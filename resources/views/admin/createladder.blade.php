@extends('admin.create')

@section('admin-content')
<div class="flex justify-center">
<div class="items-center w-1/2">

   
    
    <h3 class="font-semibold text-lg m-8 text-center">Please Write Ladder name</h3>
    <form method="post" action="{{ route('storeladder') }}">
        @csrf
        
        <input type="text" name="laddername"  placeholder="ladder Name"
        class="bg-gray-100 border-2 w-full p-4 rounded-lg  ">
        <textarea placeholder="Ladder Description"  class="bg-gray-100 border-2 w-full p-4 rounded-lg block"></textarea>
        <button type="submit" class="border-2 w-full p-3 rounded-lg bg-gray-400 hover:bg-cyan-800 hover:text-white font-semibold">
            Add Ladder</button>
    </form>
</div>
</div>
@endsection