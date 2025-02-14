<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "All Users Data";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addusers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->username;
        $student->email = $request->useremail;
        $student->age = $request->userage;
        $student->phone = $request->userphone;
        $student->city = $request->usercity;
        $student->address = $request->useraddress;
        $student->password = $request->userpassword;

        $student->save();

        return redirect('/')->with('status', 'New User Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('viewuser', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('updateuser');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
