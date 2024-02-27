<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', \App\Livewire\IndexApp::class)->name('home-web');
Route::get('/iniciar-sesion', \App\Livewire\LoginApp::class)->name('login-admin');
Route::get('/registro', \App\Livewire\RegisterApp::class)->name('register');

// Ruta para traduccion
Route::get('/lang/{locale}', function ($locale) {

    if (! in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    \Illuminate\Support\Facades\App::setLocale($locale);

    session()->put('locale', $locale);

    return Redirect::back();

})->name('lang-app');




//Route::post('/authenticate', 'authenticate')->name('authenticate');
Route::post('/authenticate', '\App\Http\Controllers\LoginRegisterController@authenticate')->name('authenticate');
Route::post('/logout', '\App\Http\Controllers\LoginRegisterController@logout')->name('logout');

// Administracion
Route::get('/app/dashboard', \App\Livewire\Admin\Dashboard::class)->name('app-dashboard')->middleware('auth');

// Users
Route::prefix('/app/users')->group(function () {
    Route::get('/', \App\Livewire\Admin\Users\Users::class)->name('app-users')->middleware('auth');
    Route::get('/create', [\App\Livewire\Admin\Users\Users::class, 'createUser'])->name('app-create-user')->middleware('auth');
    Route::get('/edit/{id}', [\App\Livewire\Admin\Users\Users::class, 'editUser'])->name('app-edit-user')->middleware('auth');
});

// Settings
Route::prefix('/app/settings')->group(function () {
    Route::get('/', \App\Livewire\Admin\Settings\Settings::class)->name('app-settings')->middleware('auth');
    Route::get('/profile-users', \App\Livewire\Admin\Settings\ProfileUsers::class)->name('app-settings-users')->middleware('auth');
});
