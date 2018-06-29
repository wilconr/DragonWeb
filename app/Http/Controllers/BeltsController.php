<?php

namespace DragonWeb\Http\Controllers;

use DragonWeb\Belt;

use Illuminate\Http\Request;

class BeltsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belts = Belt::all(); 
        return view('belts.index', compact('belts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belts.create');
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
            $file->move(public_path().'/images/belts/', $nameFile);
            // return $nameFile;
        }
        else 
        {
            $nameFile = 'img-cinturon-default.png';
        } 

        $belt = new Belt();
        $belt->color = $request->input('color');
        $belt->avatar = $nameFile;
        $belt->save();
        // return 'Guardado';
        return redirect('belts');
        // return $request->input('cinturon');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Belt $belt)
    // public function show($id)
    {
        // $belt = Belt::find($id);
        // return $belt;

        return view('belts.show',compact('belt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Belt $belt)
    {
        return view('belts.edit',compact('belt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belt $belt)
    {
        // return $belt; 
        $belt->fill($request->except('avatar'));
         if ($request->hasFile('avatar'))
        {   
            $file = $request->file('avatar');
            $nameFile = time().$file->getClientOriginalName();
            $belt->avatar = $nameFile;
            $file->move(public_path().'/images/belts/', $nameFile);
            // return $nameFile;
        } 
        $belt->save();
        return redirect('belts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belt $belt)
    {
        // return $belt;
        $img_perfil = $belt->avatar;

        if ($img_perfil != 'img-default.png') 
        {
            $file_path = public_path().'/images/belts/'.$img_perfil;
            \File::delete($file_path);
            $belt->delete($belt);
            return redirect('belts');
        } 
        else 
        {
            $belt->delete($belt);
            return redirect('belts');
        }

        // return $file_path;
        // return $img_perfil;
    }
}
