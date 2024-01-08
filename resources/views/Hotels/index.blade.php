@extends('layouts.index')
@section('content')

<h2>Hotel List</h2>
<ul>
    @foreach($hotels as $hotel)
    <li>{{ $hotel->name }} <a>View</
    @endforeach
</ul>
<a href="{{ route('hotels.create') }}">Add Hotel</a>




@endsection