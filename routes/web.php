<?php
use App\Http\Controllers\RecipeController;
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

Route::controller(RecipeController::class)->group(function () {
    Route::get('/', 'index')->name("recipe.index");
    Route::get('/add-recipe', 'create')->name("recipe.create");
    // Route::post('/orders', 'store');
});