<?php



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

Route::group(['middleware' => ['role:admin']], function () {
	
    Route::get('/admin/category',  [\Modules\Blog\Http\Controllers\Dashboard\VA_Category::class, 'index'])->middleware(['auth'])->name('admin.category.index');
	 Route::get('/admin/articles',  [\Modules\Blog\Http\Controllers\Dashboard\VA_Article::class, 'index'])->middleware(['auth'])->name('admin.articles.index');

});

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog.controller');
});
