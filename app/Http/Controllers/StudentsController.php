<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->registration_number = $request->input('registration_number');
        $student->first_name = $request->input('first_name');
        $student->surname = $request->input('surname');
        $student->birth_date = $request->input('birth_date');
        $student->sex = $request->input('sex');
        $student->guardian_phone_number = $request->input('guardian_phone_number');
        $student->address = $request->input('address');
        $student->save();
        return redirect('student')->with('status','A student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', ['student' => $student ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->registration_number = $request->input('registration_number');
        $student->first_name = $request->input('first_name');
        $student->surname = $request->input('surname');
        $student->birth_date = $request->input('birth_date');
        $student->sex = $request->input('sex');
        $student->guardian_phone_number = $request->input('guardian_phone_number');
        $student->address = $request->input('address');
        $student->update();
        return redirect('student')->with('status','A student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('student')->with('status','A student deleted successfully');
    }
}
