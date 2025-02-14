@extends('layout')

@section('title')
    Add New User
@endsection

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="useremail" class="form-label">User Email</label>
            <input type="email" name="useremail" id="useremail" class="form-control">
        </div>
        <div class="mb-3">
            <label for="userage" class="form-label">User Age</label>
            <input type="number" name="userage" id="userage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="userphone" class="form-label">User Phone</label>
            <input type="number" name="userphone" id="userphone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="usercity" class="form-label">User City</label>
            <input type="text" name="usercity" id="usercity" class="form-control">
        </div>
        <div class="mb-3">
            <label for="useraddress" class="form-label">User Address</label>
            <input type="text" name="useraddress" id="useraddress" class="form-control">
        </div>
        <div class="mb-3">
            <label for="userpassword" class="form-label">User Password</label>
            <input type="password" name="userpassword" id="userpassword" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>
@endsection