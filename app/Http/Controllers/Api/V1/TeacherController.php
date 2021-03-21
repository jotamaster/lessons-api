<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Teacher::all();
        $teachers = Teacher::all();

        return response()->json($teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $teacher = new Teacher;
        $teacher->create($request->all());
        return $teacher;
        
        return Teacher::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return 'hola';
        // $teacher = new Teacher;
        // $teacher->create($request->all());
        // return $teacher;
        return Teacher::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherController  $teacherController
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherController $teacherController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherController  $teacherController
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherController $teacherController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherController  $teacherController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherController $teacherController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherController  $teacherController
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherController $teacherController)
    {
        //
    }
}
