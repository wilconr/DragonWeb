<?php

namespace DragonWeb\Http\Controllers;

use DragonWeb\Student;

use DragonWeb\Belt;

use DragonWeb\Schedule;

use DragonWeb\Attendant;

use DragonWeb\Attendant_Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all(); 
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $belts = Belt::all();
        $schedules = Schedule::all();
        $attendants = Attendant::all();
        $attendants = Attendant::pluck('nombres', 'id')->prepend('Elige un Acudiente');
        return view('students.create', compact('belts','schedules','attendants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar'))
        {   
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/students/', $nameFile);
            // return $nameFile;
        }
        else 
        {
            $nameFile = 'img-student-default.jpeg';
        } 

        $student = new Student();
        $student->nick_name = $request->input('nick_name');
        $student->nombres = $request->input('nombres');
        $student->apellidos = $request->input('apellidos');
        $student->genero = $request->input('genero');
        $student->fecha_nac = $request->input('fecha_nac');
        $student->belt_id = $request->input('belt_id');
        $student->telefono = $request->input('telefono');
        $student->direccion = $request->input('direccion');
        $student->fecha_ing = $request->input('fecha_ing');
        $student->peso = $request->input('peso');
        $student->estatura = $request->input('estatura');
        $student->rh = $request->input('rh');
        $student->alergias = $request->input('alergias');
        $student->seguro_med = $request->input('seguro_med');
        $student->schedule_id = $request->input('schedule_id');
        $student->avatar = $nameFile;
        $student->save();
        $student->attendants()->attach($request->input('attendant_id'));

        // return 'Guardado';
        return redirect('students');

        // return $request->input('nombres');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
        // public function show($id)
    {
        // $student = student::find($id);
        // return $student;
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return $student;
        $belts = Belt::all();
        $schedules = Schedule::all();
        $attendants = Attendant::all();
        return view('students.edit',compact('student', 'belts','schedules','attendants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // return $student; 
        $student->fill($request->except('avatar'));
         if ($request->hasFile('avatar'))
        {   
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $student->avatar = $nameFile;
            $file->move(public_path().'/images/students/', $nameFile);
            // return $nameFile;
        } 
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // return $student;
        $img_perfil = $student->avatar;

        if ($img_perfil != 'img-default.png') 
        {
            $file_path = public_path().'/images/students/'.$img_perfil;
            \File::delete($file_path);
            $student->delete($student);
            return redirect('students');
        } 
        else 
        {
            $student->delete($student);
            return redirect('students');
        }

        // return $file_path;
        // return $img_perfil;
    }
}
