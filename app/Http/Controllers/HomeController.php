<?php

namespace App\Http\Controllers;
use App\Models\Bidang;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $bidang = Bidang::all();
        return view('pages.dashboard',['bidang'=>$bidang]);
    }
}
