<?php

namespace App\Http\Controllers;

use App\Models\Sistem;
use Illuminate\Http\Request;

class SistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('sistem')->with("title", "Sistem")->with('active', 'sistem',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sistem  $sistem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $process = shell_exec('python ' . __DIR__ . '\\IkanKoi.py ' . $request->jenis . ' ' . $request->ukuran . ' ' . __DIR__ . '\\datakoi3.csv');
        // dd($process);
        $raw = explode('\n', $process)[0];
        $splitted = explode(',', $raw);
        $data = str_replace("\n", '', $splitted[count($splitted) - 1]);
        $d1 = explode("[", $data);
        $result  = explode("]", $d1[count($d1) - 1]);
        //simpan click +1 di database 
        return redirect()->back()->with('harga', $result[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sistem  $sistem
     * @return \Illuminate\Http\Response
     */
    public function edit(Sistem $sistem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sistem  $sistem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sistem $sistem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sistem  $sistem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sistem $sistem)
    {
        //
    }
}
