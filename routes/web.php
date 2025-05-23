<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FrontEndController;
use App\Models\FrontEnd;
use App\Models\Geografis;
Route::get('/', function () {
    return redirect()->route('frontend');
});

// Add explicit home route that redirects to dashboard
Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('auth');


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/frontend', [FrontEndController::class, 'index'])->name('frontend');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
    Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
    Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
    Route::get('/{page}', [PageController::class, 'index'])->name('page');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/bidang/{page}', [BidangController::class, 'index'])->name('bidang');
    Route::resource('bidangs', BidangController::class)->except(['create', 'edit']);

    Route::get('/pejabat/{page}', [PejabatController::class, 'index'])->name('pejabat');
    Route::resource('pejabat', PejabatController::class)->except(['create', 'edit']);

    Route::get('/sejarah/{page}', [SejarahController::class, 'index'])->name('sejarah');
    Route::resource('sejarah', SejarahController::class)->except(['create', 'edit']);

    Route::get('/visimisi/{page}', [VisimisiController::class, 'index'])->name('visimisi');
    Route::resource('visimisi', VisimisiController::class)->except(['create', 'edit']);

    Route::get('/struktur/{page}', [StrukturController::class, 'index'])->name('struktur');
    Route::resource('struktur', StrukturController::class)->except(['create', 'edit']);

    Route::get('/geografis/{page}', [GeografisController::class, 'index'])->name('geografis');
    Route::resource('geografis', GeografisController::class)->except(['create', 'edit']);

    Route::get('/map/{page}', [MapController::class, 'index'])->name('map');
    Route::resource('map', MapController::class)->except(['create', 'edit']);

    Route::get('/galeri/{page}', [GalleryController::class, 'index'])->name('galeri');
    Route::resource('galeri', GalleryController::class)->except(['create', 'edit']);

    Route::get('/berita/{page}', [BeritaController::class, 'index'])->name('berita');
    Route::resource('berita', BeritaController::class)->except(['create', 'edit']);

    
    
});


// Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FrontEndController::class, 'store'])->name('feedback.store');


