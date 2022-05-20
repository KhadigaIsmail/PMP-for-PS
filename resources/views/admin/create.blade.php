@extends('layout.app')

@section('content')
<div>
    <a href="{{ route('addproblemtoladder') }}">Add problem to ladder</a>
    <a href="{{ route('viewaddladder') }}">Add Ladder</a>
    <a href="{{ route('create') }}">Update Problemset</a>
    
</div>
@endsection