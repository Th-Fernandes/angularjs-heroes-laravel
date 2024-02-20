<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroQueryController;
use App\Http\Controllers\OpportunityController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', fn () => view('layouts.app'));
// ->middleware(['auth']);

Route::get('/isUserAuthorized', function () {
    return Response()->json(['isAuth' => Auth::check()]);
});

Route::resource('/api/heroes', HeroController::class)
    ->only(['index', 'store', 'show']);

Route::resource('/api/heroes/isValid', HeroQueryController::class);

Route::resource('/api/opportunities', OpportunityController::class)
    ->middleware(['auth']);



require __DIR__ . '/auth.php';
