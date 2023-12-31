<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\PerpindahanController;
use App\Http\Controllers\PostController;
use App\Models\Kelahiran;
use App\Models\Kematian;
use App\Models\Penduduk;
use App\Models\Perpindahan;
use App\Models\Post;
use Illuminate\Http\Client\Request;
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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('/penduduk');
    });

    Route::get('/desa', function () {
        return view('desa');
    });

    Route::get('/penduduk', function () {
        $penduduk_real = Penduduk::all();
        // echo $penduduk_real;

        return view('penduduk.table', ['data' => $penduduk_real, 'title' => 'Penduduk', 'menus' => [['label' => 'Download', 'color' => 'slate-900', 'href' => '/penduduk/download'], ['label' => 'Tambah', 'color' => 'green', 'href' => '/penduduk/add']]]);
    })->name('penduduk');

    Route::get('/kelahiran', function () {
        $kelahiran_all = Kelahiran::all();

        return view('kelahiran.table', ['data' => $kelahiran_all, 'title' => 'Kelahiran', 'menus' => [['label' => 'Download', 'color' => 'slate-900', 'href' => '/kelahiran/download'], ['label' => 'Tambah', 'color' => 'green', 'href' => '/kelahiran/add']]]);
    })->name('kelahiran');

    Route::get('/kematian', function () {
        $kematian_all = Kematian::all();
        // echo $penduduk_real;
        return view('kematian.table', ['data' => $kematian_all, 'title' => 'Kematian', 'menus' => [['label' => 'Download', 'color' => 'slate-900', 'href' => '/kematian/download'], ['label' => 'Tambah', 'color' => 'green', 'href' => '/kematian/add']]]);
    })->name('kematian');

    Route::get('/pindah', function () {
        $perpindahan_all = Perpindahan::all();

        return view('pindah.table', ['data' => $perpindahan_all, 'title' => 'Pindah', 'menus' => [['label' => 'Download', 'color' => 'slate-900', 'href' => '/pindah/download'], ['label' => 'Add', 'color' => 'green', 'href' => '/pindah/add']]]);
    })->name('pindah');

    Route::get('/penduduk/edit/{id}', function ($id) {
        $penduduk = Penduduk::find($id);
        return view('penduduk.form', ['data' => $penduduk, 'isEdit' => true]);
    });

    Route::get('/kelahiran/edit/{id}', function ($id) {
        $kelahiran = Kelahiran::find($id);
        return view('kelahiran.form', ['data' => $kelahiran, 'isEdit' => true]);
    });

    Route::get('/kematian/edit/{id}', function ($id) {
        $kematian = Kematian::find($id);
        return view('kematian.form', ['data' => $kematian, 'isEdit' => true]);
    });

    Route::get('/pindah/edit/{id}', function ($id) {
        $perpindahan = Perpindahan::find($id);
        return view('pindah.form', ['data' => $perpindahan, 'isEdit' => true]);
    });

    Route::get('/penduduk/download', [PdfGeneratorController::class, 'pendudukAll']);
    Route::get('/kelahiran/download', [PdfGeneratorController::class, 'kelahiranAll']);
    Route::get('/kematian/download', [PdfGeneratorController::class, 'kematianAll']);
    Route::get('/pindah/download', [PdfGeneratorController::class, 'pindahAll']);

    Route::get('/penduduk/file/{id}', [PdfGeneratorController::class, 'index']);
    Route::get('/kelahiran/file/{id}', [PdfGeneratorController::class, 'kelahiran']);
    Route::get('/kematian/file/{id}', [PdfGeneratorController::class, 'kematian']);
    Route::get('/pindah/file/{id}', [PdfGeneratorController::class, 'pindah']);

    Route::put('/kematian/edit/{id}', [KematianController::class, 'update'])->name('kematian.edit');
    Route::put('/kelahiran/edit/{id}', [KelahiranController::class, 'update'])->name('kelahiran.edit');
    Route::put('/penduduk/edit/{id}', [FormController::class, 'update'])->name('penduduk.edit');
    Route::put('/pindah/edit/{id}', [PerpindahanController::class, 'update'])->name('pindah.edit');

    Route::post('/penduduk/delete/{id}', [FormController::class, 'delete'])->name('penduduk.delete');
    Route::post('/kelahiran/delete/{id}', [KelahiranController::class, 'delete'])->name('kelahiran.delete');
    Route::post('/kematian/delete/{id}', [KematianController::class, 'delete'])->name('kematian.delete');
    Route::post('/pindah/delete/{id}', [PerpindahanController::class, 'delete'])->name('pindah.delete');

    Route::get('/penduduk/add', function () {
        return view('penduduk.form', ['isEdit' => false, 'data' => []]);
    });

    Route::get('/kelahiran/add', function () {
        return view('kelahiran.form', ['isEdit' => false, 'data' => []]);
    });

    Route::get('/kematian/add', function () {
        return view('kematian.form', ['isEdit' => false, 'data' => []]);
    });

    Route::get('/pindah/add', function () {
        return view('pindah.form', ['isEdit' => false, 'data' => []]);
    });

    Route::post('/submit-perpindahan', [PerpindahanController::class, 'submit'])->name('pindah.submit');
    Route::post('/submit-kelahiran', [KelahiranController::class, 'submit'])->name('kelahiran.submit');
    Route::post('/submit-kematian', [KematianController::class, 'submit'])->name('kematian.submit');
    Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');

    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post/{slug}', [PostController::class, 'show']);

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// ->name('login-form.submit');

Route::get('/register', function () {
    return view('register');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
