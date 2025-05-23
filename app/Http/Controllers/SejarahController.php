<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Http\Requests\StoreSejarahRequest;
use App\Http\Requests\UpdateSejarahRequest;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarahs = Sejarah::all();
        return view('sejarah.index', ['sejarahs' => $sejarahs]);
    }

    public function store(StoreSejarahRequest $request)
    {
        $validated = $request->validated();

        Sejarah::create([
            'namasejarah' => $validated['namasejarah'],
        ]);

        return redirect('/sejarah/index')->with('success', 'Sejarah berhasil ditambahkan.');
    }

    public function update(UpdateSejarahRequest $request, Sejarah $sejarah)
    {
        $validated = $request->validated();

        $sejarah->update([
            'namasejarah' => $validated['namasejarah'],
        ]);

        return redirect('/sejarah/index')->with('success', 'Sejarah berhasil diperbarui.');
    }

    public function destroy(Sejarah $sejarah)
    {
        $sejarah->delete();

        return redirect('/sejarah/index')->with('success', 'Sejarah berhasil dihapus.');
    }
}
