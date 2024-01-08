@extends('layouts.index')

@section('content')
<h2>Create Hotel</h2>
    <form method="post" action="{{ route('hotels.store') }}">
        @csrf
        <label for="name">Hotel Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Hotel</button>
    </form>
    <a href="{{ route('index') }}">Back to List</a>
@endsection