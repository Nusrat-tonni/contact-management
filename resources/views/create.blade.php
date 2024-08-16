@extends('layouts.app')

@section('content')
<div>
    <h1>Create Contact</h1>
    <form action="{{ url('/contacts') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Phone:</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label>Address:</label>
            <input type="text" name="address">
        </div>
        <button type="submit">Create</button>
    </form>
</div>
@endsection