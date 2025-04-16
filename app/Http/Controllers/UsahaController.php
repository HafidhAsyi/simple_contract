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

        $stafs = DB::table('stafs')->select('namaStaf')->where('id', 1)->get()->first();

        $viewData = [
            'usahas' => $usahas,
            'stafs' => $stafs,
        ];

        return view('usahas.index', $viewData);
    }

    public function header()
    {
        $stafs = DB::table('stafs')->select('namaStaf')->where('id', 1)->get()->first();

        $viewData = [
            'stafs' => $stafs,
        ];

        return view('layout.header', $viewData);
    }

    /**
     * Display a year listing of the resource.
     */
    public function yearIndex($usaha)
    {
        $usahas = DB::table('usahas')
                        ->select('id', 'namaUsaha')
                        ->whereYear('createdAt', $usaha)
                        ->get();

        $stafs = DB::table('stafs')->select('namaStaf')->where('id', 1)->get()->first();

        $viewData = [
            'usahas' => $usahas,
            'stafs' => $stafs,
        ];

       return view('usahas.yearIndex', $viewData);
    }

    /**
     * Display a category listing of the resource.
     */
    public function categoryIndex($usaha)
    {
        
        $usahas = DB::table('usahas')
                        ->select('id', 'namaUsaha', 'kategoriUsaha')
                        ->where('kategoriUsaha', $usaha)
                        ->get();
        
        $stafs = DB::table('stafs')->select('namaStaf')->where('id', 1)->get()->first();

        $viewData = [
            'usahas' => $usahas,
            'stafs' => $stafs,
        ];

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
    public function show($usaha)
    {
        $unit = DB::table('usahas')
                ->select('id', 'namaUsaha')
                ->where('id', $usaha)
                ->get()
                ->first();
        
        $viewData = [
            'unit' => $unit
        ];
        return view('usahas.show', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($usaha)
    {
        $unit = DB::table('usahas')
                ->select('id', 'namaUsaha', 'namaPemilik', 'email', 'nomorHP', 'kategoriUsaha', 'alamatUsaha')
                ->where('id', $usaha)
                ->get()
                ->first();

        $viewData = [
            'unit' => $unit
        ];
        return view('usahas.edit', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usaha)
    {
        $namaUsaha = $request->input('namaUsaha');
        $namaPemilik = $request->input('namaPemilik');
        $email = $request->input('email');
        $nomorHP = $request->input('nomorHP');
        $kategoriUsaha = $request->input('kategoriUsaha');
        $alamatUsaha = $request->input('alamatUsaha');

        DB::table('usahas')
        ->where('id', $usaha)
        ->update([
            'namaUsaha' => $namaUsaha,
            'namaPemilik' => $namaPemilik,
            'email' => $email,
            'nomorHP' => $nomorHP,
            'kategoriUsaha' => $kategoriUsaha,
            'alamatUsaha' => $alamatUsaha,
            'updatedAt' => Carbon::now(), 
        ]);

        //redirect
        return redirect()->route('usahas.show', $usaha);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($usaha)
    {
        DB::table('usahas')
            ->where('id', $usaha)
            ->delete();
        
        return redirect()->route('usahas.index');
    }
}
