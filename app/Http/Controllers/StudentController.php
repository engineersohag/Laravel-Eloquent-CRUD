<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::simplePaginate(8);

        // $students = Student::find([2, 25], ['name', 'age']);
        // $students = Student::count();
        // $students = Student::min('age');
        // $students = Student::max('age');
        // $students = Student::sum('age');

        // $students = Student::where('city', 'London')->get();
        // return $students;

        return view("home", compact("students"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
