<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita.index', compact('beritas'));
    }

    public function store(StoreBeritaRequest $request)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('images', 'public');
            }

            Berita::create($validated);

            return redirect('/berita/index')->with('success', 'Berita berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect('/berita/index')->with('error', 'Gagal menambahkan berita');
        }
    }

    public function update(UpdateBeritaRequest $request, $id)
    {
        try {
            $berita = Berita::findOrFail($id);
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                    Storage::disk('public')->delete($berita->image);
                }
                $validated['image'] = $request->file('image')->store('images', 'public');
            }

            $berita->update($validated);

            return redirect('/berita/index')->with('success', 'Berita berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect('/berita/index')->with('error', 'Gagal memperbarui berita');
        }
    }

    public function destroy($id)
    {
        try {
            $berita = Berita::findOrFail($id);

            // Hapus gambar jika ada
            if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                Storage::disk('public')->delete($berita->image);
            }

            $berita->delete();
            return redirect('/berita/index')->with('success', 'Berita berhasil dihapus');
        } catch (\Exception $e) {
            return redirect('/berita/index')->with('error', 'Gagal memperbarui berita');
        }
    }
}
