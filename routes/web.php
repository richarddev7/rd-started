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

Route::get('/', \App\Livewire\IndexApp::class)->name('home-web');
Route::get('/iniciar-sesion', \App\Livewire\LoginApp::class)->name('login-admin');
Route::get('/registro', \App\Livewire\RegisterApp::class)->name('register');

// Post & Page (Website)
Route::get('/blog', \App\Livewire\Website\Blog::class)->name('blog-web');
Route::get('/cat/{slug}', \App\Livewire\Website\Blog::class)->name('categories-web');
Route::get('/{slug}', \App\Livewire\Website\Website::class)->name('post-web');

// Ruta para traduccion
Route::get('/lang/{locale}', function ($locale) {

    if (! in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    \Illuminate\Support\Facades\App::setLocale($locale);

    session()->put('locale', $locale);

    return Redirect::back();

})->name('lang-app');


// Administracion
Route::get('/app/dashboard', \App\Livewire\Admin\Dashboard::class)->name('app-dashboard')->middleware('auth');

// Users
Route::prefix('/app/users')->group(function () {
    Route::get('/', \App\Livewire\Admin\Users\Users::class)->name('app-users')->middleware('auth');
    Route::get('/create', [\App\Livewire\Admin\Users\Users::class, 'createUser'])->name('app-create-user')->middleware('auth');
    Route::get('/edit/{id}', [\App\Livewire\Admin\Users\Users::class, 'editUser'])->name('app-edit-user')->middleware('auth');
});

// Page
Route::prefix('/app/pages')->group(function () {
    Route::get('/', \App\Livewire\Admin\Pages\Pages::class)->name('app-pages')->middleware('auth');
    Route::get('/create', [\App\Livewire\Admin\Pages\Pages::class, 'createPage'])->name('app-create-page')->middleware('auth');
    Route::get('/edit/{id}', [\App\Livewire\Admin\Pages\Pages::class, 'editPage'])->name('app-edit-page')->middleware('auth');
});

// Articles
Route::prefix('/app/articles')->group(function () {
    Route::get('/', \App\Livewire\Admin\Articles\Articles::class)->name('app-articles')->middleware('auth');
    Route::get('/create', [\App\Livewire\Admin\Articles\Articles::class, 'createArticle'])->name('app-create-article')->middleware('auth');
    Route::get('/edit/{id}', [\App\Livewire\Admin\Articles\Articles::class, 'editArticle'])->name('app-edit-article')->middleware('auth');

    // Categories
    Route::get('/categories', \App\Livewire\Admin\Articles\Categories::class)->name('app-articles-categories')->middleware('auth');
});

// Settings
Route::prefix('/app/settings')->group(function () {
    Route::get('/', \App\Livewire\Admin\Settings\Settings::class)->name('app-settings')->middleware('auth');
    Route::get('/profile-users', \App\Livewire\Admin\Settings\ProfileUsers::class)->name('app-settings-users')->middleware('auth');
});
