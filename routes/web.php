<?php

use App\Http\Controllers\RoleController;
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

Route::get('/', function () {  return view('pages.home');})->name("home");

Route::get("/roles", [RoleController::class, "index"])->name("role.index");
Route::post("/roles", [RoleController::class, "store"])->name("role.store");
Route::get("/roles/create", [RoleController::class, "create"])->name("role.create");
Route::get("/roles/{id}", [RoleController::class, "show"])->name("role.show");

Route::get("/roles/{id}/edit", [RoleController::class, "edit"])->name("role.edit");
Route::put("/roles/{id}", [RoleController::class, "update"])->name("role.update");
Route::delete("/roles/{id}", [RoleController::class, "destroy"])->name("role.delete");

