<?php

namespace App\Http\Controllers;

use App\Models\usaha;
use Illuminate\Http\Request;
//use App\Http\Controllers\view;
use Illuminate\Support\Facades\DB;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $allUsaha = usaha::all();
        // return view('usaha.index', compact('allUsaha'));
        $view_data = [
            'usahas' => [
                //first, last, handle
                ['hafidh', 'asyi', '@gmail.com'],
                ['iysa', 'hdifah', '@yahoo.com']
            ]
        ];
        return view('usahas.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usahas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cara nerima inputan dari user di Controller
        $title = $request->input('title');
        $content = $request->input('content');


        DB::table('usahas')->insert([
            'title' => $title,
            'content' => $content,
            'created_at' => date ('Y-m-d H:i:s'),
            'updated_at' => date ('Y-m-d H:i:s'),
        ]);
        
        //redirect
        return redirect('usahas');
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
