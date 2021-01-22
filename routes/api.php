<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\SnippetController;
use App\Http\Controllers\API\UserSnippetsController;

    
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Snippets routes
Route::get('snippets', [SnippetController::class, 'index']);
Route::post('snippets', [SnippetController::class, 'store']);
Route::get('snippets/{snippet}', [SnippetController::class, 'show']);
Route::put('snippets/{snippet}', [SnippetController::class, 'update']);
Route::delete('snippets/{snippet}', [SnippetController::class, 'destroy']);
// User snippets routes
Route::get('users/{user}/snippets', [UserSnippetsController::class, 'index']);