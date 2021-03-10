<?php

namespace App\Http\Controllers\Api;

use App\{ViaTransfer};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViaTransferController extends Controller
{
    public function index()
    {
        $data = ViaTransfer::select(['id', 'nama_bank'])->get();

        $messages = [
            'code' => 200,
            'message' => 'Successfully',
            'data' => $data
        ];
        
        return response()
            ->json($messages, $messages['code'])
            ->header('Content-Type', 'application/json');
    }
    
    public function show(Request $request, ViaTransfer $jenispembayaran)
    {
        $data = ViaTransfer::select(['id', 'nama_siswa', 'nominal'])->find($request->id);
        
        $messages = [
            'code' => 200,
            'message' => 'Successfully',
            'data' => $data
        ];
        
        return response()
            ->json($messages, $messages['code'])
            ->header('Content-Type', 'application/json');
    }
}
