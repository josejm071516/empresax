<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empresa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $empresa = new \App\Empresa;

    $empresa->nombre = $request['nombre'];

    $empresa->save();

    return redirect('/empresa/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        $empresas = Empresa::all();
        return view('empresa.show',[
            'empresas' => $empresas
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa, $id)
    {
        $empresa = Empresa::find($id);
        return view('empresa.edit',['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa, $id)
    {
        $empresa = Empresa::find($id);

        $this->validate($request, [
            'nombre' => 'required'
        ]);

        $input = $request->all();

        $empresa->fill($input)->save();

        return redirect('empresa/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @param    $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa,$id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();

        return redirect('empresa/show');
    }
}
