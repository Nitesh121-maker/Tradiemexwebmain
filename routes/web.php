<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\CountriesdataController;
use App\Http\Controllers\ContinentDataController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CareerFormController;
use App\Http\Controllers\PartnersFormController;
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
//     return view('frontend.index');
// });
Route::get('/',[LinkController::class,'index']);
// Get Country Data
Route::get('/', [CountriesdataController::class, 'countrydata'])->name('countrydata');
Route::get('/about-us',[LinkController::class,'aboutus']);
Route::get('/why-choose-us',[LinkController::class,'whychooseus']);
Route::get('/find-buyer-supplier',[LinkController::class,'fbs']);
Route::get('/careers',[LinkController::class,'carrers']);
Route::get('/our-clients',[LinkController::class,'clients']);
Route::get('/partners',[LinkController::class,'partners']);
Route::get('/faqs',[LinkController::class,'FAQ']);
Route::get('/disclaimer',[LinkController::class,'disclaimer']);
Route::get('/terms-of-use',[LinkController::class,'tou']);
Route::get('/privacy-policy',[LinkController::class,'privacy']);
// Thank You Page
Route::get('/thankyou',[LinkController::class,'thankyou']);
// Contact Us
Route::get('/contact-us',[LinkController::class,'contactus']);
// Products
Route::get('/products',[LinkController::class,'products']);
Route::get('/customs-data',[CountriesdataController::class,'customsdata']);
Route::get('/statistical-data',[CountriesdataController::class,'statisticaldata']);
Route::get('/bl-data',[CountriesdataController::class,'blreport']);
Route::get('/analytical-custom-report',[LinkController::class,'customizedanalyticaldata']);
// Trade
Route::get('/global-trade-data',[CountriesdataController::class,'globaltradedata']);
// Get Continent Data
Route::get('/{continent}-trade-data', [ContinentDataController::class, 'continentData'])
->where('continent', '[a-zA-Z\-]+')
->name('continent.tradeData');
// Get Country Data
Route::get('/{country}-{Datatype}', [CountriesdataController::class, 'countryalldata'])
    ->where('country', '[a-zA-Z\-]+')
    ->name('countryalldata');


// Contact Form
Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('contact.send');
Route::post('/career', [CareerFormController::class, 'sendCareerApplication'])->name('career.send');

Route::post('/partner', [PartnersFormController::class, 'PartnerForm'])->name('partner.send');