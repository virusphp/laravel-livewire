<?php

use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Laporan\FakturTerimaIndex;
use App\Http\Livewire\Laporan\TandaTerimaIndex;
use App\Http\Livewire\Master\Bagian\BagianIndex;
use App\Http\Livewire\Master\Subunit\SubunitIndex;
use App\Http\Livewire\Pendaftaran\Rawatjalan\RawatjalanIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/password/{password}', function($password) {
    return bcrypt($password);
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

     Route::group(['namespace' => 'Dashboard'], function () {
        Route::get('dashboard', Index::class)->name('dashboard');
    });

    Route::group(['namespace' => 'Master'], function () {

        Route::group(['namespace' => 'Subunit'], function () {
            Route::get('subunit', SubunitIndex::class)->name('subunit');
        });
        
        Route::group(['namespace' => 'Bagian'], function () {
            Route::get('bagian', BagianIndex::class)->name('bagian');
        });

    });
            
    Route::group(['namespace' => 'Laporan'], function () {
        Route::get('fakturtt', FakturTerimaIndex::class)->name('fakturtt');
        Route::get('tandaterima', TandaTerimaIndex::class)->name('tandaterima');
    });

    Route::group(['namespace' => 'Pendaftaran'], function () {
        Route::group(['namespace' => 'Rawatjalan'], function () {
            Route::get('rawatjalan', RawatjalanIndex::class)->name('rawatjalan');
        });
    });

});
