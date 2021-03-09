<?php

namespace App\Http\Controllers\Api;

use App\RencanaPembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RencanaPembayaranController extends Controller
{
    public function index()
    {
        $data = RencanaPembayaran::with('JenisPembayaran')->select(['id', 'jenis_pembayaran_id', 'banyaknya', 'total_nominal'])->get();

        $messages = [
            'code' => 200,
            'message' => 'Successfully',
            'data' => $data
        ];
        
        return response()
            ->json($messages, $messages['code'])
            ->header('Content-Type', 'application/json');
    }
    
    public function show(Request $request, RencanaPembayaran $jenispembayaran)
    {
        $data = RencanaPembayaran::with('JenisPembayaran')->select(['id', 'jenis_pembayaran_id', 'banyaknya', 'total_nominal'])->find($request->id);
        
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
