<?php

namespace App\Http\Controllers;

use App\Models\usaha;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUsaha = usaha::all();
        return view('usaha.index', compact('allUsaha'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usaha.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi
        $validatedData = $request->validate([
            'namaUsaha' => 'required'
        ]);

        //simpan
        usaha::create($validatedData);

        //redirect
        return redirect()->route('usaha.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(usaha $usaha)
    {
        return view('usaha.show', compact('usaha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usaha $usaha)
    {
        return view('usaha.edit', compact('usaha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usaha $usaha)
    {
        //validasi
        $validatedData = $request->validate([
            'namaPemilik' => 'required'
        ]);

        //simpan
        $usaha->update($validatedData);

        //redirect
        return redirect()->route('usaha.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usaha $usaha)
    {
        $usaha->delete();
        //redirect
        return redirect()->route('usaha.index');
    }
}
