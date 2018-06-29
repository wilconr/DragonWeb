<?php

namespace DragonWeb\Http\Controllers;

use DragonWeb\Attendant;

use DragonWeb\Student;

use Illuminate\Http\Request;

class AttendantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendants = Attendant::all(); 
        return view('attendants.index', compact('attendants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all(); 
        return view('attendants.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendant = new Attendant();
        $attendant->nick_name = $request->input('nick_name');
        $attendant->nombres = $request->input('nombres');
        $attendant->apellidos = $request->input('apellidos');
        $attendant->telefono = $request->input('telefono');
        $attendant->direccion = $request->input('direccion');
        $attendant->save();
        $attendant->students()->attach($request->input('student_id'));
        // return 'Guardado';
        return redirect('attendants');
        // return $request->input('nombres');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendant $attendant)
    // public function show($id)
    {
        // $attendant = attendant::find($id);
        // return $attendant;
        return view('attendants.show',compact('attendant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendant $attendant)
    {
        // return $attendant;
        $students = Student::all(); 
        return view('attendants.edit',compact('attendant','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendant $attendant)
    {
        // return $attendant;
        // return $request;
        $attendant->fill($request->all());
        $attendant->save();
        return redirect('attendants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendant $attendant)
    {
        // return $attendant;
        $attendant->delete($attendant);
        return redirect('attendants');
    }
}
