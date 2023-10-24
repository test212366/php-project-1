<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

// Route::get('/', function () {
//    // return view('listings', [
// 	// 	// 'heading' => 'Latest Listings',
// 	// 	'listings' => Listing::all(),
// 	//  ]);
// });

Route::get('/', [ListingController::class, 'index']);
 

Route::get('/listings/create', [ListingController::class, 'create'])
->middleware('auth');


Route::post('/listings', [ListingController::class, 'store'])
->middleware('auth');

Route::get('/listings/{listing}', [ListingController::class, 'show'])
->middleware('auth');
 


Route::get('/listings/{listing}/edit', 
[ListingController::class, 'edit'])
->middleware('auth');



Route::put('/listings/{listing}', [ListingController::class, 'update'])
->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
->middleware('auth');

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');



Route::get('/register', [UserController::class, 'create'])
->middleware('guest');


Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])
->middleware('auth');


Route::get('/login', [UserController::class, 'login']) ->name('login')->middleware('guest');



Route::post('/users/authenticate', [UserController::class, 'authenticate']);



 
// Route::get('/listings/{listing}', function(Listing $listing) {

// 	// $listing = Listing::find($id);

// 	// if($listing) {
// 		// return view('listing', [
// 		// 	'listing' => $listing
// 		// ]);
// 	// } else {
// 	// 	abort('404');
// 	// }
	
// });


//common resource routes:
//index = show all listings
//show = show single listings
//create - show form to crate new listing
//store - store new listing
//edit show form to edit listing
//update = update listing
//destory = delete listing

// Route::get('/hello', function() {
// 	return response('<h1> Hello </h1>', 200) 
// 	 	->header('Content-Type', 'text/plain')
// 		->header('foo', 'bar');
// });


// Route::get('/posts/{id}', function($id) {

// 	// dd($id);
// 	return response('Post' . $id);
// }) -> where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
// 	return $request->name . '' . $request->city;
// });