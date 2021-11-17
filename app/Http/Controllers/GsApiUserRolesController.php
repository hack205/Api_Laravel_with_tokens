<?php

namespace App\Http\Controllers;

use App\Models\gs_api_user_roles;
use Illuminate\Http\Request;

class GsApiUserRolesController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datosrole_user = new gs_api_user_roles;
        $datosrole_user->id = $request->id;
        $datosrole_user->user_id = $request->user_id;
        $datosrole_user->role_id = $request->role_id;
        $datosrole_user->save();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gs_api_user_roles  $gs_api_user_roles
     * @return \Illuminate\Http\Response
     */
    public function getRoleUser(gs_api_user_roles $datosrole_user)
    {
        $datosrole_user = gs_api_user_roles::all();
        return $datosrole_user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gs_api_user_roles  $gs_api_user_roles
     * @return \Illuminate\Http\Response
     */
    public function edit(gs_api_user_roles $gs_api_user_roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gs_api_user_roles  $gs_api_user_roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gs_api_user_roles $gs_api_user_roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gs_api_user_roles  $gs_api_user_roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(gs_api_user_roles $gs_api_user_roles)
    {
        //
    }
}
