<?php
/*
 * @project   Автор проекта - Valexo CMS Lite
 * @author    Valentin Alexo
 * @email     osvax@yandex.com
 * @phone    +7(909)057-22-69
 *
 * Создание сайтов и интернет магазинов, посадочных страниц
 * Разработка проектов на Laravel. SEO и SMM продвижение.
 * Copyright (C) 2020 - 2021, Inc - Все права защищены
 *
 */

use App\Http\Controllers\Auth\DashbordController;
use App\Http\Controllers\Auth\CategoriesController;
use App\Http\Controllers\Auth\ArticlesController;
use App\Http\Controllers\Auth\SettingsController;
use App\Http\Controllers\Auth\PagesController;
use App\Http\Controllers\Auth\StatisticsController;
use Illuminate\Support\Facades\Route;

/**
 * 'elfinder.ckeditor'
 */


Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/admin');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [DashbordController::class, 'index'])->middleware(['auth'])->name('admin.dashboard.index');
    Route::get('/admin/category',  [CategoriesController::class, 'index'])->middleware(['auth'])->name('admin.category.index');


    /**
     * Роуты для создания и редактирования страниц
     */
    Route::get('/admin/pages',  [PagesController::class, 'index'])->name('admin.pages.index');
    Route::post('/admin/pages/store',  [PagesController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/create',  [PagesController::class, 'create'])->name('admin.pages.create');
    Route::get('/admin/pages/delete/{page}',  [PagesController::class, 'destroy'])->name('admin.pages.destroy');
    Route::get('/admin/pages/show/{id}',  [PagesController::class, 'show'])->name('admin.pages.show');
    Route::put('/admin/pages/update/{id}',  [PagesController::class, 'update'])->name('admin.pages.update');



    Route::get('/admin/statistic',  [StatisticsController::class, 'index'])->middleware(['auth'])->name('admin.statistic.index');
    Route::get('/admin/articles',  [ArticlesController::class, 'index'])->middleware(['auth'])->name('admin.articles.index');
    Route::get('/admin/settings',  [SettingsController::class, 'index'])->middleware(['auth'])->name('admin.settings.index');

});



