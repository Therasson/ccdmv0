<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Space;
use App\Http\Controllers\SpaceController;
use App\Http\Resources\SpaceResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** Routes Space */
Route::get('spaces', function(){
    return SpaceResource::collection(Space::all());
});

Route::post('space', [SpaceController::class, 'store']);