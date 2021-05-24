<?php

use App\Http\Controllers\gmailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','index');

Route::get('/oauth/gmail', function (){
    return LaravelGmail::redirect('/messages');
});

Route::get('/oauth/gmail/callback', function (){
    LaravelGmail::makeToken();
    return redirect()->to('/messages');
});

Route::get('/oauth/gmail/logout', function (){
    LaravelGmail::logout(); //It returns exception if fails
    return redirect()->to('/');
});


Route::get('messages',[gmailController::class,'messages']);

Route::get('/mail/{id}',[gmailController::class,'detailsMail']);

