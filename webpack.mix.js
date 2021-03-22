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

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management Admin
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/access/js/app.js", "public/access/js")
    .sass("resources/access/sass/app.scss", "public/access/css")
	//.copyDirectory('resources/access/fonts', 'public/access/fonts')
	//.copyDirectory('resources/access/img', 'public/access/img')
    .sourceMaps()
    .version()
	.options({
		fileLoaderDirs:  {
			fonts: 'access/fonts',
			images: 'access/img'
    }
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management Public
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps()
    .version();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management Production
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
if (mix.inProduction()) {
    mix.version();
}
