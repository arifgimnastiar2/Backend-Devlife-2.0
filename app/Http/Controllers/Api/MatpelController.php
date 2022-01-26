<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Matpel;
use App\Http\Controllers\Api\ResponseFormatter;

class MatpelController extends Controller
{
    public function getData()
    {
        $items = Matpel::with('guru')->get();

        return ResponseFormatter::success($items, 'token', 'Successfully get data mapel!');
    }
}
