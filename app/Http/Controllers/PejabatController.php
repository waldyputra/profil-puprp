<?php

namespace App\Http\Controllers;

use App\Models\pejabat;
use App\Http\Requests\StorePejabatRequest;
use App\Http\Requests\UpdatePejabatRequest;
use Illuminate\Support\Facades\Storage;

class PejabatController extends Controller
{
    public function index()
    {
        $pejabats = pejabat::all();
        return view('pejabat.index', ['pejabats' => $pejabats]);
    }

    public function store(StorePejabatRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('images', 'public');
        }

        Pejabat::create($validated);

        return redirect('/pejabat/index')->with('success', 'Pejabat berhasil ditambahkan.');
    }

    public function update(UpdatePejabatRequest $request, pejabat $pejabat)
    {
        $validated = $request->validated();

        // Initialize the filename to the existing file if no new file is uploaded
        $fileName = $pejabat->foto;

        if ($request->hasFile('foto')) {
            // Delete the old photo if it exists
            if ($pejabat->foto) {
                Storage::delete('public/uploads/' . $pejabat->foto);
            }
            // Generate a new filename and save the new photo
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
        }

        // Update the pejabat record
        $pejabat->update([
            'jabatan' => $validated['jabatan'],
            'namapejabat' => $validated['namapejabat'],
            'nip' => $validated['nip'],
            'tempatlahir' => $validated['tempatlahir'],
            'tanggallahir' => $validated['tanggallahir'],
            'agama' => $validated['agama'],
            'pangkat' => $validated['pangkat'],
            'pendidikan' => $validated['pendidikan'],
            'foto' => $fileName, // Use the updated filename
        ]);

        return redirect('/pejabat/index')->with('success', 'Pejabat berhasil diperbarui.');
    }


    public function destroy(pejabat $pejabat)
    {
        $pejabat->delete();

        return redirect('/pejabat/index')->with('success', 'Pejabat berhasil dihapus.');
    }
}
