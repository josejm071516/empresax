<?php

namespace App\Http\Controllers;

use App\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('direccion.create',[
            'id' => $id
            ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $direccion = new \App\Direccion;

        $direccion->direccion = $request['direccion'];
        $direccion->empresa_id = $id;
        $direccion->save();

        $direccion = Direccion::all();
        return view('direccion.show',[
            'direcciones' => $direccion,
            'id' => $id
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Direccion  $direccion
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion, $id)
    {
        $direccion = Direccion::all();
        return view('direccion.show',[
            'direcciones' => $direccion,
            'id' => $id
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccion, $id)
    {
        $direccion = Direccion::find($id);
        return view('direccion.edit',['direccion' => $direccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccion, $id)
    {
        $direccion = Direccion::find($id);

        $direccion->direccion = $request['direccion'];
        $direccion->empresa_id = $id;
        $direccion->save();

        $direcciones = Direccion::all();
        return view('direccion.show',[
            'direcciones' => $direcciones,
            'id' => $direccion->empresa_id
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Direccion  $direccion
     * @param    $id
     *  @param   $idEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccion, $id, $idEmpresa)
    {
        $destroy = Direccion::find($id);
        $destroy->delete();

        $direccion = Direccion::all();
        return view('direccion.show',[
            'direcciones' => $direccion,
            'id' => $idEmpresa
            ]);
    }
}
