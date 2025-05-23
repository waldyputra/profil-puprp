<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Gallery::with('photos')->get();
        return view('galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $validated = $request->validated();

        $galeri = Gallery::create([
            'title' => $request->title,
        ]);

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $file) {
                $path = $file->store('photos', 'public');
                Photo::create([
                    'gallery_id' => $galeri->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect('/galeri/index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $galeri)
    {
        //

        $validated = $request->validated();

        // Initialize the filename to the existing file if no new file is uploaded
        $galeri->update([
            'title' => $request->title,
        ]);

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $file) {
                $path = $file->store('photos', 'public');
                Photo::create([
                    'gallery_id' => $galeri->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect('/galeri/index')->with('success', 'Galeri berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $galeri)
    {
        foreach ($galeri->photos as $photo) {
            Storage::disk('public')->delete($photo->path);
            $photo->delete();
        }
        $galeri->delete();

        return redirect('/galeri/index')->with('success', 'Galeri berhasil dihapus.');
    }
}
