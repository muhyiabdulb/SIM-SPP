<?php

namespace App\Http\Controllers\Api;

use App\JenisPembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    public function index()
    {
        $data = Type::select(['id', 'jenis_pembayaran'])->get();

        $messages = [
            'code' => 200,
            'message' => 'Successfully',
            'data' => $data
        ];
        
        return response()
            ->json($messages, $messages['code'])
            ->header('Content-Type', 'application/json');
    }
    
    public function show(Request $request, Type $type)
    {
        $data = Type::select(['id', 'jenis_pembayaran', 'nominal'])->find($request->id);
        
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
