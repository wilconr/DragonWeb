<?php

namespace DragonWeb\Http\Controllers;

use DragonWeb\Maestro;

use DragonWeb\Belt;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all(); 
        return view('maestros.index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $belts = Belt::all();
        return view('maestros.create', compact('belts'));
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
            $file->move(public_path().'/images/maestros/', $nameFile);
            // return $nameFile;
        }
        else 
        {
            $nameFile = 'img-maestro-default.png';
        } 

        $maestro = new Maestro();
        $maestro->nick_name = $request->input('nick_name');
        $maestro->nombres = $request->input('nombres');
        $maestro->apellidos = $request->input('apellidos');
        $maestro->fecha_nac = $request->input('fecha_nac');
        $maestro->belt_id = $request->input('belt_id');
        $maestro->avatar = $nameFile;
        $maestro->save();
        // return 'Guardado';
        return redirect('maestros');
        // return $request->input('nombres');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    // public function show($id)
    {
        // $maestro = maestro::find($id);
        // return $maestro;
        return view('maestros.show',compact('maestro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        // return $maestro;
        $belts = Belt::all();
        return view('maestros.edit',compact('maestro', 'belts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {
        // return $maestro; 
        $maestro->fill($request->except('avatar'));
         if ($request->hasFile('avatar'))
        {   
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $maestro->avatar = $nameFile;
            $file->move(public_path().'/images/maestros/', $nameFile);
            // return $nameFile;
        } 
        $maestro->save();
        return redirect('maestros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maestro $maestro)
    {
        // return $maestro;
        $img_perfil = $maestro->avatar;

        if ($img_perfil != 'img-default.png') 
        {
            $file_path = public_path().'/images/maestros/'.$img_perfil;
            \File::delete($file_path);
            $maestro->delete($maestro);
            return redirect('maestros');
        } 
        else 
        {
            $maestro->delete($maestro);
            return redirect('maestros');
        }

        // return $file_path;
        // return $img_perfil;
    }
}
