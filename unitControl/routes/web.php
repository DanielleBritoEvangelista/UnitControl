<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UnitController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeePositionController;

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
    return view('welcome');
});

/* #region Routes Unit */

Route::get("/unit", [UnitController::class, "index"])->name("unit");
Route::get("/unit/add", [UnitController::class, "store"])->name("unitAdd");
Route::post("/unit/insert", [UnitController::class, "unitInsert"])->name("unitInsert");
Route::get("/unit/employees", [UnitController::class, "unitReport"])->name("unitReport");

/* #endregion */

/* #region Routes Position */

Route::get("/position", [PositionController::class, "index"])->name("position");
Route::get("/position/add", [PositionController::class, "store"])->name("positionAdd");
Route::post("/position/insert", [PositionController::class, "positionInsert"])->name("positionInsert");

/* #endregion */

/* #region Routes Employee */

Route::get("/employee", [EmployeeController::class, "index"])->name("employee");
Route::get("/employee/add", [EmployeeController::class, "store"])->name("employeeAdd");
Route::post("/employee/insert", [EmployeeController::class, "employeeInsert"])->name("employeeInsert");
Route::get("/employee/report", [EmployeeController::class, "employeeReport"])->name("employeeReport");

/* #endregion */

/* #region Routes Performance */

Route::get("/performance", [EmployeePositionController::class, "index"])->name("performance");
Route::get("/performance/add", [EmployeePositionController::class, "store"])->name("performanceAdd");
Route::post("/performance/insert", [EmployeePositionController::class, "performanceInsert"])->name("performanceInsert");
Route::get("/performance/edit/{id}", [EmployeePositionController::class, "performanceEdit"])->name("performanceEdit");
Route::post("/performance/update/{id}", [EmployeePositionController::class, "performanceUpdate"])->name("performanceUpdate");
Route::get('/ranking', [EmployeePositionController::class, 'ranking'])->name('ranking');

/* #endregion */



