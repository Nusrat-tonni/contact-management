@extends('layouts.app')

@section('content')
<div>
    <h1>Contact Details</h1>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>
    <p><strong>Created At:</strong> {{ $contact->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $contact->updated_at }}</p>
    <a href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a>
</div>
@endsection