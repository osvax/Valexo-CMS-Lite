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
 
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\Dashboard\VA_Dashboard;
use App\Http\Controllers\Dashboard\VA_Category;
use App\Http\Controllers\Dashboard\VA_Article;
use App\Http\Controllers\Dashboard\VA_Setting;
use App\Http\Controllers\Dashboard\VA_Page;
use App\Http\Controllers\Dashboard\VA_Statistic;

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
    Route::get('/admin', [VA_Dashboard::class, 'index'])->middleware(['auth'])->name('admin.dashboard.index');
    Route::get('/admin/category',  [VA_Category::class, 'index'])->middleware(['auth'])->name('admin.category.index');


    /**
     * Роуты для создания и редактирования страниц
     */
    Route::get('/admin/pages',  [VA_Page::class, 'index'])->name('admin.pages.index');
    Route::post('/admin/pages/store',  [VA_Page::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/create',  [VA_Page::class, 'create'])->name('admin.pages.create');
    Route::get('/admin/pages/delete/{page}',  [VA_Page::class, 'destroy'])->name('admin.pages.destroy');
    Route::get('/admin/pages/show/{id}',  [VA_Page::class, 'show'])->name('admin.pages.show');
    Route::put('/admin/pages/update/{id}',  [VA_Page::class, 'update'])->name('admin.pages.update');



    Route::get('/admin/statistic',  [VA_Statistic::class, 'index'])->middleware(['auth'])->name('admin.statistic.index');
    Route::get('/admin/articles',  [VA_Article::class, 'index'])->middleware(['auth'])->name('admin.articles.index');
    Route::get('/admin/settings',  [VA_Setting::class, 'index'])->middleware(['auth'])->name('admin.settings.index');

});



