<?php

use App\Http\Controllers\ApplicantSkillController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PositionSkillController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\VacancyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('applicants-skills', ApplicantSkillController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('positions', PositionController::class);
Route::resource('positions-skills', PositionSkillController::class);
Route::resource('skills', SkillController::class);
Route::resource('vacancies', VacancyController::class);
