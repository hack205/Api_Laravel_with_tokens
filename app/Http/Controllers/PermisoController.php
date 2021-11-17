<?php

namespace App\Http\Controllers;

use App\Models\permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPermisos()
    {
        $datosPermiso = permiso::all();
        return $datosPermiso;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datosPermiso = new permiso;
        $datosPermiso->id = $request->id;
        $datosPermiso->type = $request->type;
        $datosPermiso->save();
        return response()->json([
            "message" => "Permiso record created"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(permiso $permiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permiso $permiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(permiso $permiso)
    {
        //
    }
}
