<?php

use Illuminate\Http\Request;
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
    return view('listings',[
        'heading'=>'Latest Listings',
        'listings'=>[
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum aliquam illo animi neque consequatur molestiae, aspernatur corporis reprehenderit hic dignissimos. Animi sapiente quaerat voluptatibus eveniet saepe asperiores officia sint odit!'
            ],
            [
                'id'=>2,
                'title'=>'Listing Two',
                'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum aliquam illo animi neque consequatur molestiae, aspernatur corporis reprehenderit hic dignissimos. Animi sapiente quaerat voluptatibus eveniet saepe asperiores officia sint odit!'
            ]
        ]
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