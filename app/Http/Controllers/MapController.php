<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('map.index', ['maps' => $maps]);
    }

    public function store(StoreMapRequest $request)
    {
        $validated = $request->validated();

        Map::create([
            'alamat' => $validated['alamat'],
            'koordinat' => $validated['koordinat'],
        ]);

        return redirect('/map/index')->with('success', 'Map berhasil ditambahkan.');
    }

    public function update(UpdateMapRequest $request, Map $map)
    {
        $validated = $request->validated();

        $map->update([
            'alamat' => $validated['alamat'],
            'koordinat' => $validated['koordinat'],
        ]);

        return redirect('/map/index')->with('success', 'Map berhasil diperbarui.');
    }

    public function destroy(Map $map)
    {
        $map->delete();

        return redirect('/map/index')->with('success', 'Map berhasil dihapus.');
    }
}
