<?php

use App\Http\Controllers\Cms\ProfileController;
use App\Http\Controllers\TestMailController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Cms\DashboardController;
use App\Http\Controllers\Cms\ActivityController;
use App\Http\Controllers\Cms\SettingController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/static/{page}', function (string $page) {
    return view("static.$page");
});

Route::prefix('test-mail')->name('test-mail.')->controller(TestMailController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/success', 'success')->name('success');
});

Route::prefix('cms')->name('cms.')->middleware('auth')->group(function () {
    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'show')->name('show');
        Route::get('/edit', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });

    Route::middleware('verified')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
        Route::prefix('setting')->name('setting.')->controller(SettingController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit', 'edit')->name('edit');
            Route::patch('/', 'update')->name('update');
        });
    });
});

require __DIR__.'/auth.php';
