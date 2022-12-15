<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
    return view('listings',[

        'job_listings'=> Listing::all()
    ]);
});

// without exception
// Route::get('/job-listings/{id}', function($id){ 
//     return view('listing', [
//         'job_listing' => Listing::find($id)
//     ]);
// });

// with exception handling
// Route::get('/job-listings/{id}', function($id){
    
//     $listing = Listing::find($id);
//     if($listing){
//         return view('listing', [
//             'job_listing' => $listing
//         ]);
//     } else{
//         abort('404');
//     }
    
// });

// using route model binding
// eloquent function
Route::get('/job-listings/{listing}', function(Listing $listing){
    return view('listing',[
        'job_listing'=>$listing
    ]);
});
















// Testing route to hello world and header manipulation
Route::get('/World', function(){
    return response("<h1>Hello World</h1>",202)->header("Content-Type", "text/plain")->header("foo","bar");
});

// Testing route to take in contents in url
// with constraints
Route::get('/posts/{id}',function($id){
    // . for concatanation in php
    return response("Post " . $id);
    //constaints are called after the methods
})->where('id', '[0-9]+');


// Testing route for query or search from request
Route::get("/search", function(Request $request){
    // dd($request);
    return $request->name . " " . $request->city;
});