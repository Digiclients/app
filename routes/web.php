<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ShareableLinkController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\PDFController;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save-user-info', [App\Http\Controllers\HomeController::class, 'saveUserInfo'])->name('saveUserInfo');
// *************************** LISTINGS *********************
// Route::get('/voitures', [AnnonceController::class, 'listings'])->name('listings');
Route::get('/voitures', function () {
    return view('errors.maintenance');
})->name('listings');

Route::get('voitures/{annonceId}', [AnnonceController::class, 'show'])->name('annonce.show');
// *********************** LINK SHARED **************************
Route::get('/result/{id}', [ShareableLinkController::class, 'redirectToOriginal'])->name('shareable.redirect');

// ******************* GENERATE PDF ***********************
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

// ******************* CREATE ANNONCE *******************
// Route::get('/deposer-une-annonce', [AnnonceController::class, 'create'])->name('create-annonce');
Route::get('/deposer-une-annonce', function () {
    return view('errors.maintenance');
})->name('create-annonce');

Route::middleware(['auth', 'role:particulier|professionnel'])->group(function () {
    Route::post('/deposer-une-annonce', [AnnonceController::class, 'store'])->name('store-annonce');
    Route::get('/deposer-une-annonce/{annonceId}/images', [AnnonceController::class, 'validateAnnonce'])->name('images-annonce');
    Route::post('/check-photos/{annonceId}', [AnnonceController::class, 'checkPhotos'])->name('checkPhotos');

    // ************************ PROFILE ROUTES ****************************
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('home');
        Route::post('/', [ProfileController::class, 'store'])->name('store');
        Route::post('/avatar', [ProfileController::class, 'updateAvatar'])->name('avatar.update');

        Route::get('/annonces', [ProfileController::class, 'annonces'])->name('annonces');

        Route::get('/favoris', [ProfileController::class, 'favourites'])->name('favourites');

        // Route::get('/profile/AnouncePhotos', function () {
        //     return view('profile.AddAndUpdatePhotos');
        // })->name('AnouncePhotos');
    });

});



    // ************************ about pages ****************************

Route::get('/Qui-sommes-nous', function () {
    return view('about');
})->name('about');


Route::get('/Contactez-nous', function () {
    return view('contact');
})->name('contact');




// ******************** ADMIN ROUTES *************************
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('home');
});


// ***************** CHECK IF AUTH NEED THIS JS ************************
Route::get('/isAuth', [App\Http\Controllers\HomeController::class, 'isAuthenticate'])->name('isAuth');
