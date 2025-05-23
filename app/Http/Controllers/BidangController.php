<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Http\Requests\StoreBidangRequest;
use App\Http\Requests\UpdateBidangRequest;

class BidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::all();
        return view('bidang.index', ['bidangs' => $bidangs]);
    }

    public function store(StoreBidangRequest $request)
    {
        $validated = $request->validated();

        Bidang::create([
            'namabidang' => $validated['namabidang'],
            'tentang' => $validated['tentang'],
        ]);

        return redirect('/bidang/index')->with('success', 'Bidang berhasil ditambahkan.');
    }

    public function update(UpdateBidangRequest $request, Bidang $bidang)
    {
        $validated = $request->validated();

        $bidang->update([
            'namabidang' => $validated['namabidang'],
            'tentang' => $validated['tentang'],
        ]);

        return redirect('/bidang/index')->with('success', 'Bidang berhasil diperbarui.');
    }

    public function destroy(Bidang $bidang)
    {
        $bidang->delete();

        return redirect('/bidang/index')->with('success', 'Bidang berhasil dihapus.');
    }
}
