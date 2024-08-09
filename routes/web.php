<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShareableLinkController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\admin\AdminDashboardController;

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
Route::get('/increment-search-count', [App\Http\Controllers\HomeController::class, 'incrementSearchCount']);
// *************************** LISTINGS *********************
// Route::get('/voitures', [AnnonceController::class, 'listings'])->name('listings');
Route::get('/voitures', function () {
    return view('errors.maintenance');
})->name('listings');

Route::get('voitures/{annonceId}', [AnnonceController::class, 'show'])->name('annonce.show');
// *********************** LINK SHARED **************************
Route::get('/result/{id}', [ShareableLinkController::class, 'redirectToOriginal'])->name('shareable.redirect');

// ******************* GENERATE PDF ***********************
// Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generatePDF');
Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generatePDF');


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

Route::get('/à-propos', function () {
    return view('about');
})->name('about');


Route::get('/Contactez-nous', [ContactController::class, 'index'])->name('contact');
Route::post('/Contactez-nous', [ContactController::class, 'send'])->name('contact.send');




// ******************** ADMIN ROUTES *************************
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('home');
    Route::get('/options', [AdminDashboardController::class, 'options'])->name('options');
    Route::get('/price_range', [AdminDashboardController::class, 'price_range'])->name('range');
    Route::post('/price_range', [AdminDashboardController::class, 'update_price_range'])->name('range.update');
    // Route::get('/price_range', [AdminDashboardController::class, 'get_price_range'])->name('range.brand');
});






// ***************** CHECK IF AUTH NEED THIS JS ************************
Route::get('/isAuth', [App\Http\Controllers\HomeController::class, 'isAuthenticate'])->name('isAuth');










// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################
// ###############################################################




Route::get('/dashboard/analyse', function () {
    return view('dashboard.AnalyticsDashboardv2');
})->name('dashboard.analyticsv2');



Route::get('/dashboard/AverageData', function () {
    return view('dashboard.AverageData');
})->name('dashboard.AverageData');



Route::get('/dashboard/dataRanges', function () {
    return view('dashboard.dataRanges');
})->name('dashboard.dataRanges');



Route::get('/dashboard/options', function () {
    return view('dashboard.options');
})->name('dashboard.options');

Route::get('/dashboard/importAnounces', function () {
    return view('dashboard.importAnounces');
})->name('dashboard.importAnounces');


Route::get('/dashboard/publicite', function () {
    return view('dashboard.publicite');
})->name('dashboard.publicite');

Route::get('/dashboard/leads', function () {
    return view('dashboard.leads');
})->name('dashboard.leads');








Route::get('/dashboard/test', function () {
    return view('dashboard.pages.TestDashBoard');
})->name('dashboard.test');



Route::get('/dashboard/analytics', function () {
    return view('dashboard.AnalyticsDashboard');
})->name('dashboard.analytics');





Route::get('/dashboard/analyticsv3', function () {
    return view('dashboard.AnalyticsDashboardv3');
})->name('dashboard.analyticsv3');




// Start of Chat / navbar list

Route::get('/dashboard/Chat', function () {
    return view('dashboard.Chat.Chat');
})->name('dashboard.Chat');

// End of Chat / navbar list


// ###############################################################
// ##################### START Mail  PAGES  ######################
// ###############################################################

Route::get('/dashboard/Mail/MailInbox', function () {
    return view('dashboard.Mail.MailInbox');
})->name('dashboard.Mail.MailInbox');

Route::get('/dashboard/Mail/ReadMail', function () {
    return view('dashboard.Mail.ReadMail');
})->name('dashboard.Mail.ReadMail');


Route::get('/dashboard/Mail/MailCompose', function () {
    return view('dashboard.Mail.MailCompose');
})->name('dashboard.Mail.MailCompose');


// ###############################################################
// ###################### END Mail  PAGES  #######################
// ###############################################################



// ###############################################################
// ##################### START Users  PAGES  ######################
// ###############################################################

Route::get('/dashboard/Users/List', function () {
    return view('dashboard.Users.List');
})->name('dashboard.Users.List');

Route::get('/dashboard/Users/View', function () {
    return view('dashboard.Users.View');
})->name('dashboard.Users.View');




// ###############################################################
// ###################### END Users  PAGES  #######################
// ###############################################################







// ###############################################################
// ##################### START Blog  PAGES  ######################
// ###############################################################

Route::get('/dashboard/Blog/List', function () {
    return view('dashboard.Blog.BlogList');
})->name('dashboard.Blog.BlogList');

Route::get('/dashboard/Blog/Grid', function () {
    return view('dashboard.Blog.BlogGrid');
})->name('dashboard.Blog.BlogGrid');


Route::get('/dashboard/Blog/Details', function () {
    return view('dashboard.Blog.BlogDetails');
})->name('dashboard.Blog.BlogDetails');



Route::get('/dashboard/Blog/Add', function () {
    return view('dashboard.Blog.AddBlog');
})->name('dashboard.Blog.AddBlog');





// ###############################################################
// ###################### END Blog  PAGES  #######################
// ###############################################################




// Start of Pages / navbar list


Route::get('/dashboard/Pages/BlankPage', function () {
    return view('dashboard.Pages.BlankPage');
})->name('dashboard.Pages.BlankPage');


Route::get('/dashboard/Pages/Blog', function () {
    return view('dashboard.Pages.Blog');
})->name('dashboard.Pages.Blog');



// End of Pages / navbar list






// Start of UiElements / navbar list


Route::get('/dashboard/UiElements/Buttons', function () {
    return view('dashboard.UiElements.Buttons');
})->name('dashboard.UiElements.Buttons');


Route::get('/dashboard/UiElements/Modals', function () {
    return view('dashboard.UiElements.Modals');
})->name('dashboard.UiElements.Modals');


Route::get('/dashboard/UiElements/Alerts', function () {
    return view('dashboard.UiElements.Alerts');
})->name('dashboard.UiElements.Alerts');


Route::get('/dashboard/UiElements/Tooltip&Popover', function () {
    return view('dashboard.UiElements.Tooltip&Popover');
})->name('dashboard.UiElements.Tooltip&Popover');


Route::get('/dashboard/UiElements/Progressbar', function () {
    return view('dashboard.UiElements.Progressbar');
})->name('dashboard.UiElements.Progressbar');


Route::get('/dashboard/UiElements/Typography', function () {
    return view('dashboard.UiElements.Typography');
})->name('dashboard.UiElements.Typography');


Route::get('/dashboard/UiElements/Breadcrumbs', function () {
    return view('dashboard.UiElements.Breadcrumbs');
})->name('dashboard.UiElements.Breadcrumbs');


Route::get('/dashboard/UiElements/Pagination', function () {
    return view('dashboard.UiElements.Pagination');
})->name('dashboard.UiElements.Pagination');


Route::get('/dashboard/UiElements/Carousel', function () {
    return view('dashboard.UiElements.Carousel');
})->name('dashboard.UiElements.Carousel');


Route::get('/dashboard/UiElements/Toasts', function () {
    return view('dashboard.UiElements.Toasts');
})->name('dashboard.UiElements.Toasts');


Route::get('/dashboard/UiElements/Spinner', function () {
    return view('dashboard.UiElements.Spinner');
})->name('dashboard.UiElements.Spinner');



// End of UiElements / navbar list







// Start of Forms / navbar list

Route::get('/dashboard/Forms/FormElements', function () {
    return view('dashboard.Forms.FormElements');
})->name('dashboard.Forms.FormElements');

Route::get('/dashboard/Forms/FormLayouts', function () {
    return view('dashboard.Forms.FormLayouts');
})->name('dashboard.Forms.FormLayouts');

Route::get('/dashboard/Forms/FormValidation', function () {
    return view('dashboard.Forms.FormValidation');
})->name('dashboard.Forms.FormValidation');


// End of Forms / navbar list




// Start of Charts / navbar list

Route::get('/dashboard/Charts/Chartjs', function () {
    return view('dashboard.Charts.Chartjs');
})->name('dashboard.Charts.Chartjs');

Route::get('/dashboard/Charts/ApexChartsjs', function () {
    return view('dashboard.Charts.ApexChartsjs');
})->name('dashboard.Charts.ApexChartsjs');

// End of Charts / navbar list




// Start of Tables / navbar list

Route::get('/dashboard/Tables/BootstrapTables', function () {
    return view('dashboard.Tables.BootstrapTables');
})->name('dashboard.Tables.BootstrapTables');

Route::get('/dashboard/Tables/DataTables', function () {
    return view('dashboard.Tables.DataTables');
})->name('dashboard.Tables.DataTables');

// End of Tables / navbar list
