@extends('layout')

@section('title')
    Update User Data
@endsection

@section('content')
    <form action="{{ route('users.update', $students->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" value="{{ $students->name }}" name="username" id="username" class="form-control">
            @error('username')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="useremail" class="form-label">User Email</label>
            <input type="email" value="{{ $students->email }}" name="useremail" id="useremail" class="form-control">
            @error('useremail')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="userage" class="form-label">User Age</label>
            <input type="number" value="{{ $students->age }}" name="userage" id="userage" class="form-control">
            @error('userage')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="userphone" class="form-label">User Phone</label>
            <input type="number" value="{{ $students->phone }}" name="userphone" id="userphone" class="form-control">
            @error('userphone')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="usercity" class="form-label">User City</label>
            <input type="text" value="{{ $students->city }}" name="usercity" id="usercity" class="form-control">
            @error('usercity')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="useraddress" class="form-label">User Address</label>
            <input type="text" value="{{ $students->address }}" name="useraddress" id="useraddress" class="form-control">
            @error('useraddress')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>
@endsection