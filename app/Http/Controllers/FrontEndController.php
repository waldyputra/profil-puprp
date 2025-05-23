<?php

namespace App\Http\Controllers;

use App\Models\FrontEnd;
use App\Http\Requests\StoreFrontEndRequest;
use App\Http\Requests\UpdateFrontEndRequest;
use App\Models\Bidang;
use App\Models\Geografis;
use App\Models\Visimisi;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\pejabat;
use App\Models\Feedback;
use App\Models\Struktur;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang = Bidang::all();
        $alamat = Geografis::all();
        $visimisi = Visimisi::all();
        $berita = Berita::paginate(6);
        $galeris = Gallery::with('photos')->get();
        $pejabat = pejabat::all();
        $struktur = Struktur::all();

        $stats = [
            'kurang_bermanfaat' => Feedback::where('rating', 'kurang_bermanfaat')->count(),
            'bermanfaat' => Feedback::where('rating', 'bermanfaat')->count(),
            'cukup_bermanfaat' => Feedback::where('rating', 'cukup_bermanfaat')->count(),
            'sangat_bermanfaat' => Feedback::where('rating', 'sangat_bermanfaat')->count(),
        ];

        $total = array_sum($stats);

        return view('frontend.index', compact(
            'bidang',
            'alamat',
            'visimisi',
            'berita',
            'galeris',
            'pejabat',
            'stats',
            'total',
            'struktur'
        ));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'rating' => 'required|in:kurang_bermanfaat,bermanfaat,cukup_bermanfaat,sangat_bermanfaat',
        ]);

        // Simpan ke database
        Feedback::create([
            'rating' => $request->input('rating'),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih atas penilaian Anda!');
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

    /**
     * Display the specified resource.
     */
    public function show(FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFrontEndRequest $request, FrontEnd $frontEnd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FrontEnd $frontEnd)
    {
        //
    }
}
