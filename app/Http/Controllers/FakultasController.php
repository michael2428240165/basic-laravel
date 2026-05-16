<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::orderByDesc("created_at")->get();

        return view('fakultas.list-fakultas', [
            'fakultas' => $data
        ]);
    }

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @
            </ul>
        </div>

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_fakultas' => ['required', "max:5"],
            'nama_dekan' => ['required', "max:5"]
        ], [
            'nama_fakultas.required' => 'Nama Fakultas wajib di isi'
            'nama_dekan.required' => 'Nama Dekan wajib di isi'
            'nama_fakultas.max' => 'Nama Fakultas, maksimal 50'
            'nama_dekan.max'  => 'Nama Dekan, maksimal 5 karakter'
        ]);
        
        Fakultas::create([
            'nama-fakultas' => $request->nama_fakultas,
            'nama-dekan' => $request->nama_dekan
        ]);

        return redirect('/fakultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit-fakultas', [
            'fakultas' => $fakulta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()->back();
    }
}
