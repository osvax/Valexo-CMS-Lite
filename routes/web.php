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




use App\Http\Controllers\VA_Article;
use App\Http\Controllers\VA_Page;
use App\Http\Controllers\Valexo;

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

require __DIR__.'/auth.php';
require __DIR__.'/ajax.php';

/*
Route::get('/', function() {
    return view('main');
})->name('index.controller')->middleware('auth');

*/

Route::get('/', [Valexo::class, 'index'])->name('index.controller');
//Route::get('/', [VA_Page::class , 'index'])->name('index.controller');
Route::get('/articles', [VA_Article::class , 'index'])->name('articles.controller');
Route::get('/{page}', [VA_Page::class , 'index'])->name('pages.controller');








