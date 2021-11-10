<?php

namespace App\Http\Controllers;

use App\Models\sims;
use Illuminate\Http\Request;

class SimsController extends Controller
{

    public function getSims(sims $datosSim)
    {
        $datosSim = sims::all();
        return $datosSim;
    }

    public function createSim(Request $request)
    {
        $datosSim = new sims;
        $datosSim->id = $request->id;
        $datosSim->phone = $request->phone;
        $datosSim->ICCID = $request->ICCID;
        $datosSim->COMPANY = $request->COMPANY;
        $datosSim->CELLPHONE_MINUTES = $request->CELLPHONE_MINUTES;
        $datosSim->save();
        return response()->json([
            "message" => "Sim record created"
        ], 201);
    }

    public function updateSim(Request $request, $id)
    {
        if (sims::where('id', $id)->exists()) {
            $datosSim = sims::find($id);
            //echo $datosSim;
            $datosSim->phone = is_null($request->phone) ? $datosSim->phone : $request->phone;
            $datosSim->ICCID = is_null($request->ICCID) ? $datosSim->ICCID : $request->ICCID;
            $datosSim->COMPANY = is_null($request->COMPANY) ? $datosSim->COMPANY : $request->COMPANY;
            $datosSim->CELLPHONE_MINUTES = is_null($request->CELLPHONE_MINUTES) ? $datosSim->CELLPHONE_MINUTES : $request->CELLPHONE_MINUTES;
            $datosSim->save();
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Sims not found"
            ], 404);
        }
    }

    public function deleteSim($id)
    {
        if (sims::where('id', $id)->exists()) {
            $datosSim = sims::find($id);
            $datosSim->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Sim not found"
            ], 404);
        }
    }
}
