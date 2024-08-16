@extends('layouts.app')

@section('content')
<div>
    <h1>Contacts</h1>
    <form method="GET" action="{{ url('/contacts') }}">
        <input type="text" name="search" placeholder="Search by name or email">
        <button type="submit">Search</button>
    </form>
    <a href="{{ url('/contacts/create') }}">Create New Contact</a>
    <table>
        <thead>
            <tr>
                <th><a href="{{ url('/contacts?sort=name') }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th><a href="{{ url('/contacts?sort=created_at') }}">Created At</a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ url('/contacts/' . $contact->id) }}">View</a>
                        <a href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a>
                        <form action="{{ url('/contacts/' . $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection