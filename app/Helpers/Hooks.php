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

global $hooks;

if ( ! isset( $hooks ) ) {
	$hooks = [];
}

/**
 * Функция, которая всегда выполняется. Она будет выполнена раньше всех.
 * Имеет одноименный хук.
 */
if (! function_exists('init')) {
	function init()
	{
		do_action( 'init' );
	}
}

/**
 * Функция, запускающая выполнение функций, привязанных к указанному хуку.
 *
 * @param string $name_hook
 */
if (! function_exists('do_action')) {
	function do_action( $name_hook )
	{
		global $hooks;

		// если в списке присутствует указанный хук
		if ( ! empty( $hooks[ $name_hook ] ) ) {

			// перебор названий функций в списке данного хука
			foreach ( $hooks[ $name_hook ] as $function_name ) {

				// если указанная функция существует
				if ( function_exists( $function_name ) ) {

					// она выполняется
					$function_name();
				}
			}
		}
	}
}

/**
 * Функция добавления нового действия на указанный хук
 *
 * @param string $name_hook - название хука
 * @param string $callback - название функции, которую надо выполнить по хуку
 * @param int    $priority - приоритет выполнения указанной функции по данному хуку
 */
if (! function_exists('add_action')) {

	function add_action( $name_hook, $callback, $priority = 10 )
	{
		global $hooks;

		$priority                         = find_next_priority( $name_hook, $priority );
		$hooks[ $name_hook ][ $priority ] = $callback;
		ksort( $hooks[ $name_hook ], SORT_NUMERIC );
	}

}

/**
 * Определение не занятого значения приоритета
 *
 * @param string $name_hook
 * @param int    $priority
 *
 * @return int
 */
if (! function_exists('find_next_priority')) {

		function find_next_priority( $name_hook, $priority ) {
			global $hooks;

			if ( empty( $hooks[ $name_hook ][ $priority ] ) ) {
				return $priority;
			} else {
				return find_next_priority( $name_hook, $priority + 1 );
			}
		}
}

/**
 * Функция вывода массива хуков.
 */
if (! function_exists('the_hooks')) {

	function the_hooks()
	{
		global $hooks;
		pr( $hooks );
	}
}

function hello_world()
{
	echo "So Good!";
}




