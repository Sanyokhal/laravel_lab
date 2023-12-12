<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/project', [ProjectsController::class, 'index'])
    ->name('project.index');
Route::middleware('auth')->group(function () {
    Route::get('/project/create', [ProjectsController::class, 'create'])
        ->name('project.create');
    Route::get('/project/{project}', [ProjectsController::class, 'show'])
        ->name('project.show');
    Route::post('/project/', [ProjectsController::class, 'store'])
        ->name('project.store');
    Route::get('/project/{project}/edit', [ProjectsController::class, 'edit'])
        ->name('project.edit');
    Route::put('/project/{project}', [ProjectsController::class, 'update'])
        ->name('project.update');
    Route::delete('/project/{project}', [ProjectsController::class, 'destroy'])
        ->name('project.destroy');
});


require __DIR__ . '/auth.php';
