<?php
//if (!defined('OSVAX')) exit('А что нам тут надо?....');
/***************************************
 * Веб-студия "ArtValentino"
 * Автор Осотов В.А.
 * Веб адрес http://www.artvalentino.ru
 * Copyright (c) 2010-2017г
 * Данный файл защищен авторскими правами.
 * Файл: captcha.php
 * \*********************************************/

define('OSVAX', dirname($_SERVER['DOCUMENT_ROOT']) . '/youto');
define('Y2_RESOURCES', $_SERVER['DOCUMENT_ROOT'].'/captcha/res/');
define('CAPTCHA_SESSION_ID', 'y2captcha');
define('CAPTCHA_WIDTH', 200); // max 500
define('CAPTCHA_HEIGHT', 50); // max 200
define('CAPTCHA_NUM_CHARS', 5);
define('CAPTCHA_NUM_LINES', 70);
define('CAPTCHA_CHAR_SHADOW', false);
define('CAPTCHA_OWNER_TEXT', '');
define('CAPTCHA_CHAR_SET', ''); // defaults to A-Z
define('CAPTCHA_CASE_INSENSITIVE', true);
define('CAPTCHA_BACKGROUND_IMAGES', '');
define('CAPTCHA_MIN_FONT_SIZE', 15);
define('CAPTCHA_MAX_FONT_SIZE', 25);
define('CAPTCHA_USE_COLOUR', true);
define('CAPTCHA_FILE_TYPE', 'jpeg');
define('CAPTCHA_FLITE_PATH', '/');
define('CAPTCHA_AUDIO_PATH', dirname($_SERVER['DOCUMENT_ROOT']).'/tmp/'); // must be writeable by PHP process

require_once 'res/Captcha.php';

session_start();

$aFonts = array(
    Y2_RESOURCES .'fonts/Vera.ttf',
    Y2_RESOURCES .'fonts/VeraBd.ttf',
    Y2_RESOURCES .'fonts/VeraSe.ttf',
    Y2_RESOURCES .'fonts/VeraIt.ttf',
    Y2_RESOURCES .'fonts/VeraBi.ttf',
);
$captcha = new Captcha($aFonts, 200, 60);
// $captcha->SetBackgroundImages(Y2_RESOURCES .'images/example.jpg');
$captcha->Create();
