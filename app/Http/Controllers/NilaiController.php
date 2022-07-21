<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $a = Nilai::all();
        return view('nilai.index', ['nilai' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',

        ]);

        $nilai = new Nilai();
        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        if ($nilai->nilai <= 100 && $nilai->nilai >= 90) {
            $nilai->indeks_nilai = "A";
        } elseif ($nilai->nilai < 90 && $nilai->nilai >= 80) {
            $nilai->indeks_nilai = "B";
        } elseif ($nilai->nilai < 80 && $nilai->nilai >= 70) {
            $nilai->indeks_nilai = "C";
        } elseif ($nilai->nilai < 70 && $nilai->nilai >= 60) {
            $nilai->indeks_nilai = "D";
        } elseif ($nilai->nilai < 60 && $nilai->nilai >= 50) {
            $nilai->indeks_nilai = "E";
        }

        $nilai->save();
        return redirect()->route('nilai.index')->with('succes', 'Data Berhasil DiBuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.edit', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',

        ]);

        $nilai = Nilai::findOrFail($id);

        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        if ($nilai->nilai <= 100 && $nilai->nilai >= 90) {
            $nilai->indeks_nilai = "A";
        } elseif ($nilai->nilai < 90 && $nilai->nilai >= 80) {
            $nilai->indeks_nilai = "B";
        } elseif ($nilai->nilai < 80 && $nilai->nilai >= 70) {
            $nilai->indeks_nilai = "C";
        } elseif ($nilai->nilai < 70 && $nilai->nilai >= 60) {
            $nilai->indeks_nilai = "D";
        } elseif ($nilai->nilai < 60 && $nilai->nilai >= 50) {
            $nilai->indeks_nilai = "E";
        }

        $nilai->save();
        return redirect()->route('nilai.index')->with('succes', 'Data Berhasil Di Ubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with('Succes', 'Data Berhasil DiHapus;');
    }
}
