<?php

use App\Http\Controllers\itemcontroller;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = Item::all();
    return view('itemmanage')->with('items',$data);
});

Route::post('/saveItem',[itemcontroller::class,'saveitem']);
Route::get('/delete/{id}',[itemcontroller::class,'delete']);
Route::get('/update/{id}',[itemcontroller::class,'update']);
Route::post('/updateitem/{id}',[itemcontroller::class,'updateitem']);
