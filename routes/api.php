<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/get_user_detail', [AuthController::class, 'userDetail']);
Route::post('/logout', [AuthController::class, 'logout']);

//  Feedback
Route::post('/create-feedback', [FeedbackController::class, 'store']);
Route::get('/all-feedback', [FeedbackController::class, 'getAllFeedback']);

// Comments
Route::post('/comments', [CommentController::class, 'store']);
