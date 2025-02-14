@extends('layout')

@section('title')
    All Users Data Showing...
@endsection

@section('content')
    <table class="table shadow text-center table-striped table-bordered">

        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success mb-2">Add New</a>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Age</th>
            <th colspan="3">Oparation</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="{{ route('users.show', $student->id) }}" class="btn btn-sm btn-primary">View</a>
                </td>
                <td>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
                <td>
                    <a href="{{ route('users.edit', $student->id) }}" class="btn btn-sm btn-warning">Update</a>
                </td>
                
            </tr>
        @endforeach
    </table>
@endsection