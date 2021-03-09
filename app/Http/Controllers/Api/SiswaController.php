<?php

namespace App\Http\Controllers\Api;

use App\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::select(['id', 'nama_siswa'])->get();

        $messages = [
            'code' => 200,
            'message' => 'Successfully',
            'data' => $data
        ];
        
        return response()
            ->json($messages, $messages['code'])
            ->header('Content-Type', 'application/json');
    }
    
    public function show(Request $request, Siswa $jenispembayaran)
    {
        $data = Siswa::select(['id', 'nama_siswa', 'nominal'])->find($request->id);
        
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
