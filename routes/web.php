<?php

use Illuminate\Support\Facades\Route;
use App\Home_page;
use App\Services_page;
use App\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Auth\EloquentUserProvider;
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

Auth::routes();
view()->share("titleWithLanguage", "title_");
view()->share("keywordsWithLanguage", "keywords_");
view()->share("descriptionWithLanguage", "description_");
app()->singleton('lang', function () {
  return App\Http\Controllers\dashboard\PagesController::lang();
});
// app()->singleton('layOutConfig',function(){
// //  return $config=Config::take(1)->get();
// return "mohamed";
// });
App::singleton('headerConfig', function () {
  return $config=Config::all();
});


Route::middleware('language')->group(function(){
  Route::get('/', function () {
  // return "Hello, User!!! \n The site will be available soon :) ";
  $items = Home_page::all();
  $services = Services_page::all();
  return view('website.index', compact('items', 'services'));
})->name('home');
Route::get('/about', function () {
  return view('website.about');
})->name('about');
Route::get('/services', function () {
  return view('website.services');
})->name('services');
Route::get('contact', function () {
  return view('website.contact');
})->name('contact');
Route::get('/services/{serviceName}', function ($serviceName) {
  return view('website.servicePage', compact('serviceName'));
})->name('servicePage');
Route::get('ourdentists', function () {
  return view('website.ourdentists');
})->name('dentists');


});



Route::get('lang/{lang}', function ($lang) {
  if ($lang == "en") {
    session()->put('lang', 'en');
    App::setLocale('en');
  } else {
    session()->put('lang', 'nl');
    App::setLocale('nl');
  }
  return back();
  //
})->name("language");
Route::namespace('dashboard')->prefix('dashboard')->as('dashboard.')->middleware('auth')->group(function () {
  Route::get('/', 'PagesController@index');
  Route::resource('/home', 'HomePageController');


  Route::namespace('services')->prefix('services')->as('services.')->group(function () {
    Route::resource('/service', 'ServicesPageController');
    Route::resource('/servicecases', 'ServiceCasesController');
    Route::resource('/gallery', 'ServicesGalleryController');
    Route::resource('/header', 'ServicesHeaderController');

  });
  Route::namespace('about')->prefix('about')->as('about.')->group(function () {
    Route::resource('/', 'AboutPageController');
    Route::resource('/header', 'AboutHeaderController');
    Route::resource('/gallery', 'AboutGalleryController');
    Route::resource('/galleryscreen', 'AboutGalleryScreenController');
    Route::resource('/whyus', 'AboutWhyUsController');
  });

  Route::resource('/certificates','CertificatesController');
  Route::resource('/appointment', 'AppointmentPageController');
  Route::resource('/contact', 'ContactPageController');
  Route::resource('/doctors', 'DoctorsController');
  Route::resource('/config', 'ConfigController');
});

Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
//Route::get('/home', 'PagesController@index')->name('dashboard');