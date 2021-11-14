<?php

namespace App\Http\Controllers;

use App\Models\sims;
use Illuminate\Http\Request;

/**
* @OA\Info(title="API Sims", version="1.0"),
* @OA\SecurityScheme(
*      securityScheme="bearerAuth",
*      in="header",
*      name="bearerAuth",
*      type="http",
*      scheme="bearer",
*      bearerFormat="JWT",
* ),
* @OA\Server(url="http://localhost")
*/

class SimsController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/get_sims",
    *     security={{"bearerAuth":{}}},
    *     summary="Mostrar sims",
    *     @OA\Contact(
    *         email="contact@mysite.com"
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los sims disponibles."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error.",
    *         
    *     )
    * ),
    * )
    */
    public function getSims(sims $datosSim)
    {
        $datosSim = sims::all();
        return $datosSim;
    }
    /**
    * @OA\POST(
    *     path="/api/insert_sim/",
    *     security={{"bearerAuth":{}}},
    *     summary="Crear Sim ",
    *     @OA\Response(
    *         response=200,
    *         description="Sim record created"
    *     ),
    * @OA\Parameter(
    *         name="id",
    *         in="query",
    *         example=0001,
    *         required=true,
    *     ),
    * @OA\Parameter(
    *         name="phone",
    *         in="query",
    *         example=4924920534,
    *         required=true,
    *         @OA\Schema(
    *           type="integer",
    *           format="int64",
    *            minimum= 1,
    *            maximum= 9999999999
    *         )
    *         
    *     ),
    * @OA\Parameter(
    *         name="ICCID",
    *         in="query",
    *         example=00000001,
    *         required=true,
    *     ),
    * @OA\Parameter(
    *         name="COMPANY",
    *         in="query",
    *         example="0russ",
    *         required=true,
    *     ),
    * @OA\Parameter(
    *         name="CELLPHONE_MINUTES",
    *         in="query",
    *         example=200,
    *         required=true,
    *     ),
    * @OA\Response(
    *         response="default",
    *         description="Sims not found.",
    *         
    *     )
    * ),
    * )
    */
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
    /**
    * @OA\POST(
    *     path="/api/delete_sim",
    *     security={{"bearerAuth":{}}},
    *     summary="Eliminar Sim en especificó",
    *     @OA\Response(
    *         response=200,
    *         description="records deleted"
    *     ),
    * @OA\Parameter(
    *         name="id",
    *         @OA\Schema(
    *             type="integer",
    *         ),
    *         in="query",
    *         description="offset",
    *         example=1,
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Sim not found.",
    *         
    *     )
    * ),
    * )
    */
    public function deleteSim(Request $request)
    {
        if (sims::where('id', $request->id)->exists()) {
            $datosSim = sims::find($request->id);
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
