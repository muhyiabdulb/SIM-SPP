<?php

namespace App\Http\Controllers\Admin;

use App\Rayon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rayons = Rayon::latest()->paginate(5);
  
        return view('admin.rayon.index',compact('rayons'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
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
            'nama_rayon' => 'required',
        ]);
  
        Rayon::create($request->all());
   
        return redirect()->route('admin.rayon.index')
                        ->with('success','Rayon created successfully.');
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit(Rayon $rayons)
    {
        return view('admin.rayon.index',compact('rayons'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rayon $rayons)
    {
        $request->validate([
            'nama_rayon' => 'required',
        ]);
  
        $rayons->update($request->all());
  
        return redirect()->route('admin.rayon.index')
                        ->with('success','Rayon updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rayon $rayons)
    {
        $rayons->delete();
  
        return redirect()->route('admin.rayon.index')
                        ->with('success','Rayon deleted successfully');
    }
}
