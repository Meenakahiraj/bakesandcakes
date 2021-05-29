<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\shopcontroller;
use App\Http\Controllers\admincontroller;

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
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/link', function () {
    return view('link');
});


Route::get('/cusreg', function () {
    return view('cusreg');
});


Route::get('/shopreg', function () {
    return view('shopreg');
});


Route::get('/adminhome', function () {
    return view('adminhome');
});


Route::get('/adminmyaccount', function () {
    return view('adminmyaccount');
});


Route::get('/adminviewcustomer', function () {
    return view('adminviewcustomer');
});

Route::get('/adminmanagecus', function () {
    return view('adminmanagecus');
});

Route::get('/adminmanagecake', function () {
    return view('adminmanagecake');
});


Route::get('/adminmanageshop', function () {
    return view('adminmanageshop');
});

Route::get('/adminviewcake', function () {
    return view('adminviewcake');
});


Route::get('/adminviewshop', function () {
    return view('adminviewshop');
});


Route::get('/adminviewfeedback', function () {
    return view('adminviewfeedback');
});


Route::get('/cushome', function () {
    return view('cushome');
});


Route::get('/cusfeedback', function () {
    return view('cusfeedback');
});


Route::get('/shophome', function () {
    return view('shophome');
});


Route::get('/addcake', function () {
    return view('addcake');
});

Route::get('/addcookies', function () {
    return view('addcookies');
});


Route::get('/cakeview', function () {
    return view('cakeview');
});


Route::get('/cookiesview', function () {
    return view('cookiesview');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/odernow', function () {
    return view('odernow');
});


Route::get('/viewproducts', function () {
    return view('viewproducts');
});

Route::get('/viewproduct', function () {
    return view('viewproduct');
});






Route::post('/customerread',[customercontroller::class,'store']);
Route::post('/shopread',[shopcontroller::class,'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/logs',[customercontroller::class,'logs']);
Route::get('/logout',[customercontroller::class,'logout']);
Route::get("/adminviewcustomer",[customercontroller::class,'index']);
Route::get("/adminviewshop",[shopcontroller::class,'index']);
Route::post('/feedback',[customercontroller::class,'feedback']);
Route::get("/adminviewfeedback",[customercontroller::class,'viewfeed']);
Route::post('/addcake',[customercontroller::class,'cakeadd']);
Route::post('/addcookies',[customercontroller::class,'cookiesadd']);
Route::get("/cakeview",[customercontroller::class,'cakeview']);
Route::get("/cookiesview",[customercontroller::class,'cookiesview']);
Route::post('/cussearch',[customercontroller::class,'search']);
Route::post('/shsearch',[shopcontroller::class,'search']);
Route::get("/service/{id}/edit",[customercontroller::class,'edit']);
Route::post("/serviceeditprocess/{id}",[customercontroller::class,'update']);
Route::get("/service/{id}/delete",[customercontroller::class,'deleteview']);
Route::post("/servicedeleteprocess/{id}",[customercontroller::class,'destroy']);
Route::post("/shopeditprocess/{id}",[shopcontroller::class,'update']);
Route::get("/shopedit/{id}/edit",[shopcontroller::class,'edit']);
Route::post("/shopdeleteprocess/{id}",[shopcontroller::class,'destroy']);
Route::get("/shop/{id}/delete",[shopcontroller::class,'deleteview']);
Route::get('/buy/{id}',[customercontroller::class,'buy']);
Route::get('/buycookies/{id}',[customercontroller::class,'buycookies']);
Route::post('/add_to_cart',[customercontroller::class,'addToCart']);
Route::get('/cartlist',[customercontroller::class,'cartlist']);
Route::get('/removecart/{id}',[customercontroller::class,'removecart']);
Route::get('/odernow',[customercontroller::class,'odernow']);
Route::post('/oderplace',[customercontroller::class,'oderplace']);
Route::get('/myoders',[customercontroller::class,'myoders']);
Route::get("/viewproducts",[customercontroller::class,'viewproducts']);
Route::post("/producteditprocess/{id}",[customercontroller::class,'cakeupdate']);
Route::get("/cakeedit/{id}/edit",[customercontroller::class,'cakeedit']);
Route::get("/adminviewcake",[customercontroller::class,'viewcake']);
Route::get("/cushome",[customercontroller::class,'viewproduct']);
Route::get("/product/{id}/delete",[customercontroller::class,'deleteviewproduct']);
Route::post("/productdeleteprocess/{id}",[customercontroller::class,'destroyproduct']);
Route::post('/prosearch',[customercontroller::class,'prosearch']);
Route::post('/cakesearch',[customercontroller::class,'cakesearch']);
