@extends('layout')

@section('title')
    User Details
@endsection

@section('content')
    <table class="table table-striped table-bordered">
        <tr>
            <th width="90px">Name :</th>
            <td>{{ $students->name }}</td>
        </tr>
        <tr>
            <th>Email :</th>
            <td>{{ $students->email }}</td>
        </tr>
        <tr>
            <th>Phone :</th>
            <td>{{ $students->phone }}</td>
        </tr>
        <tr>
            <th>Age :</th>
            <td>{{ $students->age }}</td>
        </tr>
        <tr>
            <th>City :</th>
            <td>{{ $students->city }}</td>
        </tr>
        <tr>
            <th>Address :</th>
            <td>{{ $students->address }}</td>
        </tr>
    </table>
    <a href="/" class="btn btn-secondary btn-sm mt-3">Back</a>
@endsection