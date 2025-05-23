<?php

namespace App\Http\Controllers;

use App\Models\Geografis;
use App\Http\Requests\StoreGeografisRequest;
use App\Http\Requests\UpdateGeografisRequest;

class GeografisController extends Controller
{
    public function index()
    {
        $geografiss = Geografis::all();
        return view('geografis.index', ['geografiss' => $geografiss]);
    }

    public function store(StoreGeografisRequest $request)
    {
        $validated = $request->validated();

        Geografis::create([
            'alamat' => $validated['alamat'],
            'koordinat' => $validated['koordinat'],
        ]);

        return redirect('/geografis/index')->with('success', 'Geografis berhasil ditambahkan.');
    }

    public function update(UpdateGeografisRequest $request, Geografis $geografis)
    {
        $validated = $request->validated();

        $geografis->update([
            'alamat' => $validated['alamat'],
            'koordinat' => $validated['koordinat'],
        ]);

        return redirect('/geografis/index')->with('success', 'Geografis berhasil diperbarui.');
    }

    public function destroy(Geografis $geografis)
    {
        $geografis->delete();

        return redirect('/geografis/index')->with('success', 'Geografis berhasil dihapus.');
    }
}
