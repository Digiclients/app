<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ShareableLinkController;

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

Route::get('/leboncoin-data', [ApiController::class, 'getLeboncoinData'])->name('getLeboncoinData');
Route::get('/leboncoin-models/{marque}', [ApiController::class, 'getLeboncoinModeles'])->name('getLeboncoinModeles');

Route::post('/generate-shareable-link', [ShareableLinkController::class, 'generateShareableLink'])->name('generateShareableLink');

Route::get('/marques', [ApiController::class, 'getMarques'])->name('getMarques');

Route::get('/locations', [ApiController::class, 'getLocations'])->name('getLocations');

Route::get('/models/{marqueName}', [ApiController::class, 'getModels'])->name('getModels');


Route::get('/attributes-options', [ApiController::class, 'getAttributesOptions'])->name('getAttributesOptions');


Route::post('/upload-image/{annonceId}', [AnnonceController::class, 'uploadImage'])->name('uploadImage');
// Route::post('/setThumbnail/{annonceId}/{imageId}', [AnnonceController::class, 'setThumbnail'])->name('setThumbnail');
Route::post('/setThumbnail/{annonceId}/{imageId}', [AnnonceController::class, 'setThumbnail'])->name('setThumbnail');

Route::delete('/deposer-une-annonce/{annonceId}/images/{imageId}/delete', [AnnonceController::class, 'deleteImage'])
    ->name('deleteImage');




