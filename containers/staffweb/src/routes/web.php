<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvaluationController;

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
URL::forceScheme('https');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/staff-search', [HomeController::class, 'staffSearch'])->name('staffSearch');
Route::get('/staff-register', [HomeController::class, 'staffRegister'])->name('staffRegister');
Route::get('/staff-edit', [HomeController::class, 'staffEdit'])->name('staffEdit');
Route::get('/staff-detail', [HomeController::class, 'staffDetail'])->name('staffDetail');
Route::get('/staff-lession', [HomeController::class, 'staffLession'])->name('staffLession');
Route::get('/staff-evaluation', [HomeController::class, 'staffEvaluation'])->name('staffEvaluation');
Route::get('/teacher-sugguestion', [HomeController::class, 'teacherSugguestion'])->name('teacherSugguestion');
// Evaluations
Route::get('/evaluation-search', [EvaluationController::class, 'evaluationSearch'])->name('evaluationSearch');
Route::get('/evaluation-input', [EvaluationController::class, 'evaluationInput'])->name('evaluationInput');
Route::get('/evaluation-detail/{id}', [EvaluationController::class, 'evaluationDetail'])->name('evaluationDetail');
Route::get('/evaluation-edit', [EvaluationController::class, 'evaluationEdit'])->name('evaluationEdit');

Route::get('/schedule-search', [HomeController::class, 'scheduleSearch'])->name('scheduleSearch');
Route::get('/schedule-register', [HomeController::class, 'scheduleRegister'])->name('scheduleRegister');
Route::get('/schedule-edit', [HomeController::class, 'scheduleEdit'])->name('scheduleEdit');
Route::get('/schedule-search-lesson', [HomeController::class, 'scheduleSearchLesson'])->name('scheduleSearchLesson');
Route::get('/schedule-lession-edit', [HomeController::class, 'scheduleLessionEdit'])->name('scheduleLessionEdit');
Route::get('/schedule-lession-detail', [HomeController::class, 'scheduleLessionDetail'])->name('scheduleLessionDetail');
Route::get('/schedule-lession-substitute', [HomeController::class, 'scheduleLessionSubstitute'])->name('scheduleLessionSubstitute');

Route::prefix('api')->group(function () {
    Route::prefix('evaluation')->group(function () {

        Route::post('/search-list-evaluation', [EvaluationController::class, 'searchListEvaluation'])->name('searchListEvaluation');

    });
});
