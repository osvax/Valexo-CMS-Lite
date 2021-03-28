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




function add_styles() {
	echo    "Всем Привет ";
}

function add_styles2() {
	echo   " Дорогие мои!!\n";
}



add_action('style', 'add_styles', 2);
add_action('style', 'add_styles2', 1);



