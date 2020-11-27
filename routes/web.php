<?php

use Illuminate\Support\Facades\Route;
use App\Home_page;
use App\Services_page;
use App\Config;
use App\Doctors;
use App\About_Header;
use App\Certificates;
use App\About_gallery;
use App\About_why_us;
use App\Services_Header;
use App\Services_Gallery;
use App\About_gallery_screen;
use App\What_we_offer;
use App\Reason;
use App\Service_cases;
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
view()->share("paragraphWithLanguage", "paragraph_");
view()->share("firstSentence", "first_sentence_");
view()->share("secondSentence", "second_sentence_");
view()->share("thirdSentence", "third_sentence_");

app()->singleton('lang', function () {
  return App\Http\Controllers\dashboard\PagesController::lang();
});
// app()->singleton('layOutConfig',function(){
// //  return $config=Config::take(1)->get();
// return "mohamed";
// });
App::singleton('headerConfig', function () {
  return Config::all();
});
App::singleton('doctors', function () {
  return Doctors::all();
});
App::singleton('aboutheader', function () {
  return About_Header::all();
});
App::singleton('services', function () {
  return Services_page::all();
});
App::singleton('certificates', function () {
  return Certificates::all();
});
App::singleton('reasons', function () {
  return Reason::all();
});



Route::middleware('language')->group(function(){
  Route::get('/', function () {
  // return "Hello, User!!! \n The site will be available soon :) ";
  $items = Home_page::all();
  $services = Services_page::all();
  $aboutGalleryLeft = About_gallery::orderBy('id', 'asc')->take(2)->get();
  $aboutGalleryRight = About_gallery::orderBy('id', 'desc')->take(3)->get();

  return view('website.index', compact('items', 'services','aboutGalleryLeft','aboutGalleryRight'));
})->name('home');
Route::get('/about', function () {
  $aboutGalleryLeft = About_gallery::orderBy('id', 'asc')->take(2)->get();
  $aboutGalleryRight = About_gallery::orderBy('id', 'desc')->take(3)->get();
  $gallery = About_gallery::all();
  $whyUs=About_why_us::all();
  $aboutgalleryScreen=About_gallery_screen::all();
  return view('website.about',compact('aboutGalleryLeft','aboutGalleryRight','whyUs','aboutgalleryScreen','gallery'));
})->name('about');
Route::get('/services', function () {
  $services = Services_page::all();
  $servicesHeader = Services_Header::all();
  $servicesGallery= Services_Gallery::all();
  $whatWeOffer = What_we_offer::all();
  return view('website.services',compact('services','servicesHeader','servicesGallery','whatWeOffer'));
})->name('services');

Route::get('contact','sendEmailController@index')->name('contact');
Route::post('contact', 'sendEmailController@saveContact')->name('save');
Route::delete('contact', 'sendEmailController@destroy')->name('destroy');
Route::get('/services/{serviceID}', function ($serviceID) {
  $items= Services_page::where('id',$serviceID)->first();
  $servicesGallery= Services_Gallery::where('services_id',$serviceID)->get();
  $serviceCases= Service_cases::where('services_id',$serviceID)->get();
  $whatWeOffer = What_we_offer::all();
  return view('website.servicePage', compact('serviceID','items','servicesGallery','serviceCases','whatWeOffer'));
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
    Route::resource('/whatweoffer', 'WhatWeOfferController');

  });
  Route::namespace('about')->prefix('about')->as('about.')->group(function () {
    Route::resource('/', 'AboutPageController');
    Route::resource('/header', 'AboutHeaderController');
    Route::resource('/gallery', 'AboutGalleryController');
    Route::resource('/galleryscreen', 'AboutGalleryScreenController');
    Route::resource('/whyus', 'AboutWhyUsController');
  });
  // Route::namespace('appointment')->prefix('appointment')->as('appointment.')->group(function () {
  //   Route::resource('/', 'AppointmentPageController');
  //   Route::resource('/reason', 'ReasonController');
  //   Route::resource('/time', 'TimeController');
   
  // });

  // Route::resource('/certificates','CertificatesController');
  Route::resource('/contact', 'ContactPageController');
  Route::resource('/doctors', 'DoctorsController');
  Route::resource('/config', 'ConfigController');
});

Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
//Route::get('/home', 'PagesController@index')->name('dashboard');