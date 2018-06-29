<?php

namespace DragonWeb\Http\Controllers;

use DragonWeb\Schedule;

use Carbon\Carbon;

use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all(); 
        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->clase = $request->input('clase');
        $schedule->dia = implode(',', $request->input('dia'));
        $schedule->hora_inicio = date("H:i",strtotime($request->input('hora_inicio')));
        $schedule->hora_final = date("H:i",strtotime($request->input('hora_final')));
        $schedule->save();
        // return 'Guardado';
        return redirect('schedules');
        // return $request->input('dia');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    // public function show($id)
    {
        // $schedule = schedule::find($id);
        // return $schedule;

        return view('schedules.show',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $schedule->dia = explode(',', $schedule->dia);
        // return $schedule;
        return view('schedules.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        // return $schedule;
        // return $request;
        $schedule->fill($request->all());
        $schedule->dia = implode(',', $request->input('dia'));
        $schedule->hora_inicio = date("H:i",strtotime($request->input('hora_inicio')));
        $schedule->hora_final = date("H:i",strtotime($request->input('hora_final')));
        $schedule->save();
        return redirect('schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        // return $schedule;
        $schedule->delete($schedule);
        return redirect('schedules');
    }
}
