<?php

namespace App\Http\Controllers;

use App\Models\gs_api_role_permissions;
use Illuminate\Http\Request;

class GsApiRolePermissionsController extends Controller
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

    public function create(Request $request)
    {
        $datosrole_permissions = new gs_api_role_permissions;
        $datosrole_permissions->id = $request->id;
        $datosrole_permissions->permissions_id = $request->permissions_id;
        $datosrole_permissions->role_id = $request->role_id;
        $datosrole_permissions->save();
        return response()->json([
            "message" => "Permiso and rol record created"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datosrole_permissions)
    {
        
    }

    public function getRolePermissions(gs_api_role_permissions $datosrole_permissions)
    {
        $datosrole_permissions = gs_api_role_permissions::all();
        return $datosrole_permissions;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gs_api_role_permissions  $gs_api_role_permissions
     * @return \Illuminate\Http\Response
     */
    public function edit(gs_api_role_permissions $gs_api_role_permissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gs_api_role_permissions  $gs_api_role_permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gs_api_role_permissions $gs_api_role_permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gs_api_role_permissions  $gs_api_role_permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(gs_api_role_permissions $gs_api_role_permissions)
    {
        //
    }
}
