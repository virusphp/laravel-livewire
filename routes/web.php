<?php

use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Dashboard\Master\Subunit;
use App\Http\Livewire\Master\Bagian\BagianIndex;
use App\Http\Livewire\Master\Subunit\SubunitIndex;
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
});
