<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRol(Request $request)
    {
        $datosRol = new rol;
        $datosRol->id = $request->id;
        $datosRol->type = $request->type;
        $datosRol->save();
        return response()->json([
            "message" => "Rol record created"
        ], 201);
    }
    // con with se mandan llamar las relaciones en laravel
    public function getRols(Request $request)
    {
        $roles = rol::with('permissions')->get();
        return $roles;
        
        
    }

    public function getRolsandpermissons(rol $datosRol)
    {
        $datosRol = rol::all();
        return $datosRol;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(rol $rol)
    {
        //
    }
}
