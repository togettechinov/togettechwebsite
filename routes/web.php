<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
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
$segment = Request::segment('1');

if (array_key_exists($segment, config('languages'))) {
    app()->setLocale($segment);
} else {
    $segment = config('app.fallback_locale');
    app()->setLocale($segment);
}


    //captcha
    Route::post('captcha-validation', [App\Http\Controllers\Ajax\CaptchaServiceController::class,'capthcaFormValidate'])->name('captcha.validation');
    Route::get('reload-captcha', [App\Http\Controllers\Ajax\CaptchaServiceController::class,'reloadCaptcha'])->name('reload.captcha');

    //Frontend routes
    Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'welcome'])->name('welcome');
    Route::get('/home/contact', [App\Http\Controllers\Frontend\HomeController::class, 'contact'])->name('contact-home');
    Route::post('/contact-infos', [App\Http\Controllers\Frontend\HomeController::class, 'contactStore'])->name('contact.infos');


	/*Route::get('/dashboard', function(){
			dd('dsfdfs');
			return view('dashboard');
		});*/
   

// Auth group route
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::group(['prefix' => 'admin'], function () {

            Route::resource('contacts', ContactController::class);
            Route::get('dashboard', [DashboardController::class , 'index'])->name('dashboard');
        });

    });

// Internationalization Management
Route::get('/{lang}',[App\Http\Controllers\LanguageController::class,'switchLang'])->name('lang.switch');

// Auth and verify group route
/*Route::middleware(['auth:sanctum', 'verified'])->group( function () {


})->name('dashboard');*/
