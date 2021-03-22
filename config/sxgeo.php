<?php

return [
    // URL of countries or cities database file to download and update.
    // See https://sypexgeo.net/ru/download/.
    'dbFileURL' => 'https://sypexgeo.net/files/SxGeoCity_utf8.zip',

    // The path where the database will be stored.
    'localPath' => storage_path('app/public/GeoIP.dat'),
];
