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

use App\Http\Controllers\Dashboard\VA_Page;
use App\Http\Controllers\Ajax\AjaxStatistic;
use App\Http\Controllers\Ajax\AjaxTranslite;

Route::get('/ajax/ftranslite/{text}', function ($text) {
    $obj = new AjaxTranslite();
    echo $obj->ftranslite( $text );
})->name('ftranslite');

Route::get('/ajax/statistic/', function () {
    $obj = new AjaxStatistic();
    echo $obj->setStatistic();
})->name('setstatic');

Route::get('/ajax/onlinecount/', function () {
    $obj = new AjaxStatistic();
    echo $obj->onlineCount();
})->name('onlinecount');


Route::get('/ajax/editindexpage/', function () {
    $obj = new VA_Page();
    $obj->editIndexPage();
})->name('editindexpage');




