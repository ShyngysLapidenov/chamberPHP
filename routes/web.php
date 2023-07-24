<?php

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

Route::group([
    'prefix' => 'admin'
], function(){
    Route::group([
        'prefix' => 'news'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [App\Http\Controllers\Admin\NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [App\Http\Controllers\Admin\NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update'])->name('admin.news.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\NewsController::class, 'delete'])->name('admin.news.delete');
    });
    Route::group([
        'prefix' => 'comps'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\CompsController::class, 'index'])->name('admin.comps.index');
        Route::get('/create', [App\Http\Controllers\Admin\CompsController::class, 'create'])->name('admin.comps.create');
        Route::post('/store', [App\Http\Controllers\Admin\CompsController::class, 'store'])->name('admin.comps.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CompsController::class, 'edit'])->name('admin.comps.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\CompsController::class, 'update'])->name('admin.comps.update');
    });
    Route::group([
        'prefix' => 'events'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\EventsController::class, 'index'])->name('admin.events.index');
        Route::get('/create', [App\Http\Controllers\Admin\EventsController::class, 'create'])->name('admin.events.create');
        Route::post('/store', [App\Http\Controllers\Admin\EventsController::class, 'store'])->name('admin.events.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\EventsController::class, 'edit'])->name('admin.events.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\EventsController::class, 'update'])->name('admin.events.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\EventsController::class, 'delete'])->name('admin.events.delete');
    });
    Route::group([
        'prefix' => 'staffs'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\EmployeesController::class, 'index'])->name('admin.staffs.index');
        Route::get('/create', [App\Http\Controllers\Admin\EmployeesController::class, 'create'])->name('admin.staffs.create');
        Route::post('/store', [App\Http\Controllers\Admin\EmployeesController::class, 'store'])->name('admin.staffs.store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\EmployeesController::class, 'edit'])->name('admin.staffs.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\EmployeesController::class, 'update'])->name('admin.staffs.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\EmployeesController::class, 'delete'])->name('admin.staffs.delete');
    });
	Route::group([
        'prefix' => 'requests'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\ApplicationsController::class, 'index'])->name('admin.requests.index');
    });
	Route::group([
        'prefix' => 'sponsors'
    ], function(){
        Route::get('/', [App\Http\Controllers\Admin\MembershipsController::class, 'index'])->name('admin.members.index');
        Route::get('/{id}', [App\Http\Controllers\Admin\MembershipsController::class, 'view'])->name('admin.members.view');
	});
});

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/member', [App\Http\Controllers\PageController::class, 'member'])->name('member');
Route::get('/news', [App\Http\Controllers\PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [App\Http\Controllers\PageController::class, 'news_detail'])->name('news_detail');
Route::get('/business', [App\Http\Controllers\PageController::class, 'business'])->name('business');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/sponsor', [App\Http\Controllers\PageController::class, 'sponsor'])->name('sponsor');
Route::get('/event', [App\Http\Controllers\PageController::class, 'event'])->name('event');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
