<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\MyController;

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


Route::get("/",[StudentsController::class, "index"]);

Route::get("/Add_form",[StudentsController::class, "create"]);
Route::post("/add_form_data",[StudentsController::class, "store"]);

Route::get("/edite_data/{id}",[StudentsController::class, "edit"]);
Route::post("/update_form_data/{id}",[StudentsController::class, "update"]);

Route::get("/delete_data/{id}",[StudentsController::class, "destroy"]);

Route::get('/users', [StudentsController::class, 'index'])->name('users.index'); 



Route::get('importExportView', [MyController::class, 'importExportView']);

Route::get('export', [MyController::class, 'export'])->name('export');

Route::post('import', [MyController::class, 'import'])->name('import');

