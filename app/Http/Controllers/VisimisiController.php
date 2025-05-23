<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use App\Http\Requests\StoreVisimisiRequest;
use App\Http\Requests\UpdateVisimisiRequest;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisis = Visimisi::all();
        return view('visimisi.index', ['visimisis' => $visimisis]);
    }

    public function store(StoreVisimisiRequest $request)
    {
        $validated = $request->validated();

        Visimisi::create([
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
        ]);

        return redirect('/visimisi/index')->with('success', 'Visimisi berhasil ditambahkan.');
    }

    public function update(UpdateVisimisiRequest $request, Visimisi $visimisi)
    {
        $validated = $request->validated();

        $visimisi->update([
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
        ]);

        return redirect('/visimisi/index')->with('success', 'Visi Misi berhasil diperbarui.');
    }

    public function destroy(Visimisi $visimisi)
    {
        $visimisi->delete();

        return redirect('/visimisi/index')->with('success', 'Visimisi berhasil dihapus.');
    }
}
