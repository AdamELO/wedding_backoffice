<?php

use App\Gallery;
use App\Header;
use App\About;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $galleries  = Gallery::all();
    $headers = Header::all();
    $abouts = About::all();
    return view('index',compact('galleries','headers','abouts'));
});

Auth::routes();

Route::get('register/request', 'Auth\RegisterController@requestInvitation')->name('requestInvitation');

Route::post('invitations', 'InvitationsController@store')->middleware('guest')->name('storeInvitation');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->middleware('HasInvitation')->name('register');

Route::get('/profil', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('backoffice.admin');
})->middleware(['auth','isAdmin']);

Route::resource('/header', 'HeaderController')->middleware(['auth','isAdmin']);

Route::resource('/about', 'AboutController')->middleware(['auth','isAdmin']);

Route::resource('/gallery', 'GalleryController')->middleware(['auth','isAdmin']);

Route::resource('/mail','ContactController')->middleware(['auth','isAdmin']);

Route::resource('/adminpro','UserController')->middleware(['auth','isAdmin']);

