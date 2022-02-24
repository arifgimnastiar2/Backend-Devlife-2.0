<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Matpel;
use App\Http\Controllers\Api\ResponseFormatter;
use Illuminate\Http\Request;

class MatpelController extends Controller
{
    public function getData($paramsDay)
    {
        if ($paramsDay) {
            $data = Matpel::with('guru')->where('hari',  $paramsDay)->get();
            return ResponseFormatter::success($data, 'Successfully get data matpel filter by day ' . $paramsDay . '!');
        } else {
            $paramsDay = 'Senin';
            $data = Matpel::with('guru')->where('hari', $paramsDay)->get();
            return ResponseFormatter::success($data, 'Successfully get data matpel filter by day ' . $paramsDay . '!');
        }

        return ResponseFormatter::error(null, 'Failed to get data matpel!', 404);
    }
}
