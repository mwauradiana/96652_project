<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $students = student::all();
        return view('96552.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);
        $student = new student([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'birth_year' =>$request->get('birth_year'),
        'email' => $request->get('email'),
        'course' => $request->get('course'),
        'city' => $request->get('city'),
        'country' => $request->get('country')
    ]);
        $student->save();
        return redirect('/students')->with('success', 'student saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {

        $student = Student::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);        $student = student::find($id);
        $student->first_name =  $request->get('first_name');
        $student->last_name = $request->get('last_name');
        $student->birth_year = $request->get('birth_year');
        $student->email = $request->get('email');
        $student->course = $request->get('course');
        $student->city = $request->get('city');
        $student->country = $request->get('country');
        $student->save();

        return redirect('/students')->with('success', 'student updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/students')->with('success', 'student deleted!');
    }
}
