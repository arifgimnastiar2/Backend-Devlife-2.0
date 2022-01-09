<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Matpel;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ResponseFormatter;

class MatpelController extends Controller
{
    public function getData(Request $request)
    {
        $idMatpel = $request->input('id_matpel');

        if ($idMatpel) {
            $matpel = Matpel::findOrFail($idMatpel);

            if ($matpel) {
                return ResponseFormatter::success($matpel, 'Successfully get data matpel!');
            } else {
                return ResponseFormatter::error(null, 'Data matpel not found!', 404);
            }
        } else {
            $matpel = Matpel::all();

            if ($matpel) {
                return ResponseFormatter::success($matpel, 'Successfully get data matpel!');
            } else {
                return ResponseFormatter::error(null, 'Failed get data matpel', 400);
            }
        }
    }
}
