<?php

use App\Http\Controllers\Administration\AdminController;
use App\Http\Controllers\Administration\GroupController;
use App\Http\Controllers\Administration\PermissionController;
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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::middleware(['auth','perms'])->group(function () {
    Route::prefix("admin")->group(function (){

// USER
        Route::prefix("users")->group(function (){
            Route::name('users.')->group(function () {

                Route::get('/{id?}',[AdminController::class, 'index'])
                    ->where('id', "[0-9]+")
                    ->name('index');

                Route::get('/add',[AdminController::class, 'create'])
                    ->name('add');

                Route::post('/add',[AdminController::class, 'store'])
                    ->name('store');

                Route::get('/edit/{id?}',[AdminController::class, 'edit'])
                    ->where('id', "[0-9]+")
                    ->name('edit');

                Route::post('/edit/{id?}',[AdminController::class, 'update'])
                    ->where('id', "[0-9]+")
                    ->name('update');

                Route::post('/delete/{id?}',[AdminController::class, 'destroy'])
                    ->where('id', "[0-9]+")
                    ->name('delete');

            });
        });

// GROUP
        Route::prefix("groups")->group(function (){
            Route::name('groups.')->group(function () {
                Route::get('/{id?}',[GroupController::class, 'index'])
                    ->where('id', "[0-9]+")
                    ->name('index');

                Route::get('/add',[GroupController::class, 'create'])
                    ->name('add');

                Route::post('/add',[GroupController::class, 'store'])
                    ->name('store');

                Route::get('/edit/{id?}',[GroupController::class, 'edit'])
                    ->where('id', "[0-9]+")
                    ->name('edit');

                Route::post('/edit/{id?}',[GroupController::class, 'update'])
                    ->where('id', "[0-9]+")
                    ->name('update');

                Route::post('/delete/{id?}',[GroupController::class, 'destroy'])
                    ->where('id', "[0-9]+")
                    ->name('delete');
            });
        });


// PERMISSION

        Route::prefix("permissions")->group(function (){
            Route::name('permissions.')->group(function () {
                Route::get('/{id?}',[PermissionController::class, 'index'])
                    ->where('id', "[0-9]+")
                    ->name('index');

                Route::post('/add',[PermissionController::class, 'create'])
                    ->name('add');

                Route::get('/edit/{id?}',[PermissionController::class, 'edit'])
                    ->where('id', "[0-9]+")
                    ->name('edit');

                Route::post('/edit/{id?}',[PermissionController::class, 'update'])
                    ->where('id', "[0-9]+")
                    ->name('update');

                Route::post('/delete/{id?}',[PermissionController::class, 'destroy'])
                    ->where('id', "[0-9]+")
                    ->name('delete');
            });
        });


    });

    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/profile',[AdminController::class, 'profile'])->name('profile');
});

Route::prefix("test")->group(function (){
Route::get('/login', function () {
   return view("authoverride.login");
});

    Route::get('/register', function () {
        return view("authoverride.register");
    });
});

require __DIR__.'/auth.php';
