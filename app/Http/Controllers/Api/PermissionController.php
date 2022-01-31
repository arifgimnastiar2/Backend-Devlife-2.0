<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{

    public function index()
    {
        $items = Permission::with('detailUser')->with('detailMatpel')->get();
        return ResponseFormatter::success($items, 'Successfully get data permission!');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_nis'      => 'required|integer',
            'matpel_id'     => 'required|integer',
            'lampiran'      => 'required|image',
            'keterangan'    => 'required|string',
            'jam_izin'      => 'required'
        ]);

        if ($validator->fails()) {
            return ResponseFormatter::error($validator->errors());
        }

        $data = $request->all();
        $data['lampiran'] = $request->file('lampiran')->store(
            'assets/lampiran',
            'public'
        );

        Permission::create($data);
        return ResponseFormatter::success($data, 'auth_token', 'Successfully create data permission!');
    }

    public function show(PermissionRequest $permission)
    {
        //
    }

    public function update(Permission $permission)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
