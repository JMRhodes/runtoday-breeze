<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

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

Route::get( '/', function () {
    return Inertia::render( 'Feed', [
        'activities' => DB::table( 'activities' )
            ->where( 'user_id', '=', Auth::id() )
            ->get(),
        'yearly'     => []
    ] );
} )->middleware( [ 'auth', 'verified' ] )->name( 'feed' );

Route::get( '/activity', [ ActivityController::class, 'add' ] )
    ->middleware( [ 'auth', 'verified' ] )
    ->name( 'activity' );

Route::middleware( 'auth' )->group( function () {
    Route::get( '/profile', [ ProfileController::class, 'edit' ] )->name( 'profile.edit' );
    Route::patch( '/profile', [ ProfileController::class, 'update' ] )->name( 'profile.update' );
    Route::delete( '/profile', [ ProfileController::class, 'destroy' ] )->name( 'profile.destroy' );
} );

require __DIR__ . '/auth.php';
