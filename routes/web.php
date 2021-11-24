<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BaseController::class, 'home']);
Route::get('/services', [BaseController::class, 'services']);
Route::get('/inspections', [BaseController::class, 'inspections']);
Route::get('/affiliations', [BaseController::class, 'affiliations']);
Route::get('/about', [BaseController::class, 'about']);
Route::get('/contact', [BaseController::class, 'contact']);
Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/admin', [AdminController::class, 'makeLogin']);
Route::post('/contact-form', [BaseController::class, 'storeContactForm']);

Route::group(['middleware' => 'auth:admin'],function(){
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/home', [pageController::class, 'addPage']);	
Route::get('/service', [pageController::class, 'service']);	
Route::get('/inspection', [pageController::class, 'inspection']);	
Route::get('/affiliation', [pageController::class, 'affiliation']);	
Route::get('/about-page', [pageController::class, 'about']);	
Route::get('/contact-page', [pageController::class, 'contact']);
Route::get('/widget', [pageController::class, 'right']);
Route::get('/settings', [pageController::class, 'settings']);
Route::get('/changepassword', [pageController::class, 'changePassword']);
Route::post('change-password', [pageController::class, 'pwdChange'])->name('change-password');
Route::post('/page-create', [pageController::class, 'CreatePage'])->name('page-create');
Route::post('/dynamic-field/insert', [AdminController::class, 'insert']);
});
Route::get('/masterkey', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";
});
Route::get('/appkey', function () {
    $clearcache = Artisan::call('key:generate');
    echo "Generated";
});