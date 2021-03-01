<?php

namespace App\Http\Controllers;

use App\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $jenis_pembayarans = jenispembayaran::latest()->paginate(5);
  
        return view('jenis_pembayarans.index',compact('jenis_pembayarans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis_pembayarans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'jenis_pembayaran' => 'required',
            'nominal' => 'required',
        ]);
  
        jenispembayaran::create($request->all());
   
        return redirect()->route('jenis_pembayarans.index')
                        ->with('success','jenispembayaran created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisPembayaran  $jenisPembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPembayaran $jenisPembayaran)
    {
        return view('jenis_pembayarans.show',compact('jenispembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisPembayaran  $jenisPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPembayaran $jenisPembayaran)
    {
        return view('jenis_pembayarans.edit',compact('jenispembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisPembayaran  $jenisPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPembayaran $jenisPembayaran)
    {
        $request->validate([
            'jenis_pembayaran' => 'required',
            'nominal' => 'required',
        ]);
  
        $jenispembayaran->update($request->all());
  
        return redirect()->route('jenis_pembayarans.index')
                        ->with('success','jenispembayaran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisPembayaran  $jenisPembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPembayaran $jenisPembayaran)
    {
         $jenispembayaran->delete();
  
        return redirect()->route('jenis_pembayarans.index')
                        ->with('success','jenispembayaran deleted successfully');
    
    }
}
