<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use App\Http\Requests\StoreStrukturRequest;
use App\Http\Requests\UpdateStrukturRequest;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::all();
        return view('struktur.index', ['strukturs' => $strukturs]);
    }

    public function store(StoreStrukturRequest $request)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('foto')) {
                $validated['foto'] = $request->file('foto')->store('images', 'public');
            }

            Struktur::create($validated);

            return redirect('/struktur/index')->with('success', 'Struktur berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect('/struktur/index')->with('error', 'Gagal menambahkan struktur');
        }
    }

    public function update(UpdateStrukturRequest $request, struktur $struktur)
    {
        $validated = $request->validated();

        // Initialize the filename to the existing file if no new file is uploaded
        $fileName = $struktur->foto;

        if ($request->hasFile('foto')) {
            // Delete the old photo if it exists
            if ($struktur->foto) {
                Storage::delete('public/uploads/' . $struktur->foto);
            }
            // Generate a new filename and save the new photo
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
        }

        // Update the struktur record
        $struktur->update([
            'foto' => $fileName, // Use the updated filename
        ]);

        return redirect('/struktur/index')->with('success', 'Struktur berhasil diperbarui.');
    }

    public function destroy(struktur $struktur)
    {
        $struktur->delete();

        return redirect('/struktur/index')->with('success', 'Struktur berhasil dihapus.');
    }
}
