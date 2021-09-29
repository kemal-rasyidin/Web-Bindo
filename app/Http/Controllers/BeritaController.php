<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view ('berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'subjudul' => 'required',
            'isi' => 'required',

        ]);
         
        Berita::create($request->all());
         
        return redirect()->route('berita.index')
                        ->with('success','Member created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        return view('berita.edit',compact('berita'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        $request->validate([
            'subjudul' => 'required',
            'isi' => 'required',

        ]);

        $berita->update($request->all());
         
        return redirect()->route('berita.index')
                        ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        $berita->delete();
  
        return redirect()->route('berita.index')
                        ->with('success','berita deleted successfully');
    }
}
