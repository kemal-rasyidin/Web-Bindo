<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $komens = Komen::all();
        return view ('berita.index', compact('komens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'komentar' => 'required',

        ]);
         
        Komen::create($request->all());
         
        return redirect()->route('landing.index')
                        ->with('success','Member created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function show(Komen $komen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function edit(Komen $komen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komen $komen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komen $komen)
    {
        //
    }
}
