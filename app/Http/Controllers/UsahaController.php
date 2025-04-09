<?php

namespace App\Http\Controllers;

use App\Models\usaha;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\view;
use Illuminate\Support\Facades\DB;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usahas = DB::table('usahas')
                        ->select('id', 'namaUsaha', 'statusUsaha', 'sixMonthTempoAt', 'oneYearTempoAt')
                        ->get();
        $viewData = [
            'usahas' => $usahas,
        ];

        //get data from staf table
        // $namaStaf = DB::table('stafs')
        //                 ->select('namaStaf')
        //                 ->get();
        // $viewNama = [
        //     'stafs' => $namaStaf,
        // ];

        return view('usahas.otherIndex', $viewData);
    }

    /**
     * Display a year listing of the resource.
     */
    public function yearIndex($year)
    {
        $usahas = DB::table('usahas')
                        ->select('id', 'namaUsaha')
                        ->whereYear('approvedAt', $year)
                        ->get();
        $viewData = [
            'usahas' => $usahas,
        ];

        //get data from staf table
        // $namaStaf = DB::table('stafs')
        //                 ->select('namaStaf')
        //                 ->get();
        // $viewNama = [
        //     'stafs' => $namaStaf,
        // ];

        return view('usahas.yearIndex', $viewData);
    }

    /**
     * Display a category listing of the resource.
     */
    public function categoryIndex($category)
    {
        
        $usahas = DB::table('usahas')
                        ->select('id', 'namaUsaha')
                        ->where('kategoriUsaha', $category)
                        ->get();
        $viewData = [
            'usahas' => $usahas,
        ];

        //get data from staf table
        // $namaStaf = DB::table('stafs')
        //                 ->select('namaStaf')
        //                 ->get();
        // $viewNama = [
        //     'stafs' => $namaStaf,
        // ];

        return view('usahas.categoryIndex', $viewData);
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
        $id = $request->input('id');
        $namaUsaha = $request->input('namaUsaha');
        $kategoriUsaha = $request->input('kategoriUsaha');
        $alamatUsaha = $request->input('alamatUsaha');
        $namaPemilik = $request->input('namaPemilik');
        $email = $request->input('email');
        $nomorHP = $request->input('nomorHP');


        DB::table('usahas')->insert([
            'id' => $id,
            'namaUsaha' => $namaUsaha,
            'kategoriUsaha' => $kategoriUsaha,
            'alamatUsaha' => $alamatUsaha,
            'namaPemilik' => $namaPemilik,
            'email' => $email,
            'nomorHP' => $nomorHP,
            'statusUsaha' => 'proses',
            'nomorSK' => '-',
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
            'createdBy' => 'nama staf',
            'updatedBy' => 'nama staf',
            
        ]);

        //simpan data inputan
        // usaha::create($request->all());
        
        //redirect
        return redirect()->route('usahas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(usaha $usaha)
    {
        return view('usahas.show', compact('usaha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usaha $usaha)
    {
        return view('usahas.edit', compact('usaha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usaha $usaha)
    {
        //simpan
        $usaha->update($request->all());

        //redirect
        return redirect()->route('usahas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usaha $usaha)
    {
        $usaha->delete();
        //redirect
        return redirect()->route('usahas.index');
    }
}
