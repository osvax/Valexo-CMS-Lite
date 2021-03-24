<?php
/*
 * @project   Автор проекта - Valexo CMS LIte
 * @author    Valentin Alexo
 * @email     osvax@yandex.com
 * @phone    +7(909)057-22-69
 *
 * Создание сайтов и интернет магазинов, посадочных страниц
 * Разработка проектов на Laravel. SEO и SMM продвижение.
 * Copyright (C) 2020 - 2021, Inc - Все права защищены
 */

return [
    // URL of countries or cities database file to download and update.
    // See https://sypexgeo.net/ru/download/.
    'dbFileURL' => 'https://sypexgeo.net/files/SxGeoCity_utf8.zip',

    // The path where the database will be stored.
    'localPath' => storage_path('app/public/GeoIP.dat'),
];
