<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoAPI;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceseventController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\BookeventController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/demo",[demoAPI::class,'getData']);
Route::get("/packageList",[PackageController::class,'packageList']);

Route::get("/servicelist",[ServiceseventController::class,'serviceList']);

Route::get("/feedbacklist",[FeedbackController::class,'feedbackList']);

Route::get("/locationlist",[locationcontroller::class,'locationList']);

Route::post("/addFeedback",[FeedbackController::class,'addFeedback']);

Route::post("/addbooking",[BookeventController::class,'booking']);
