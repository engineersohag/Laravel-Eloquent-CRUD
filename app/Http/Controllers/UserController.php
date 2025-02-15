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
        // $student = new Student;

        // $student->name = $request->username;
        // $student->email = $request->useremail;
        // $student->age = $request->userage;
        // $student->phone = $request->userphone;
        // $student->city = $request->usercity;
        // $student->address = $request->useraddress;
        // $student->password = $request->userpassword;

        // $student->save();

        $request->validate([
            "username" => 'required|string',
            "useremail" => 'required|email',
            "userage" => 'required|numeric',
            "userphone" => 'required|numeric',
            "usercity" => 'required|string',
            "userpassword" => 'required|min:4',
        ]);

        Student::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'phone' => $request->userphone,
            'city' => $request->usercity,
            'address' => $request->useraddress,
            'password' => $request->userpassword
        ]);

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
        $students = Student::find($id);
        return view('updateuser', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $student = Student::find($id);

        // $student->name = $request->username;
        // $student->email = $request->useremail;
        // $student->age = $request->userage;
        // $student->phone = $request->userphone;
        // $student->city = $request->usercity;
        // $student->address = $request->useraddress;

        // $student->save();

        $request->validate([
            "username" => 'required|string',
            "useremail" => 'required|email',
            "userage" => 'required|numeric',
            "userphone" => 'required|numeric',
            "usercity" => 'required|string',
        ]);

        $student = Student::where('id', $id)
                            ->update([
                                'name' => $request->username,
                                'email' => $request->useremail,
                                'age' => $request->userage,
                                'phone' => $request->userphone,
                                'city' => $request->usercity,
                                'address' => $request->useraddress
                            ]);

        return redirect('/')->with('status', 'User Data Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();

        return redirect('/')->with('status', 'User Data Deleted Successfully.');
    }
}
