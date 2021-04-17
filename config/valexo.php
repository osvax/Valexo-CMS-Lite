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

    /**
     * Настройка админ панели
     */
    'ststistic' => true,

    'title' => 'Valexo CMS Lite',
    'title_prefix' => '',
    'title_postfix' => '',


    'enabled_laravel_mix' => true,
    'laravel_mix_css_path' => 'access/css/app.css',
    'laravel_mix_js_path' => 'access/js/app.js',



    "cb_customizer" => false,
    'use_ico_only' => false,
    'use_full_favicon' => true,
    'use_route_url' => false,
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
     * Настройка основного контейнера
     * nav-fixed
     * sidebar-mini layout-boxed
     * hold-transition sidebar-mini layout-navbar-fixed
     */

    "body_class" => "nav-fixed",

    /*

     * Navbar
     * navbar-orange navbar-light
     * bg-white
     * bg-primary
     * bg-orange
     * bg-success
     * bg-black
     * bg-dark
     */


    "navbar_class" => "shadow justify-content-between justify-content-sm-start navbar-light bg-white navbar-fixed",


    /**
     * Sidebar
     * navbar-orange navbar-light
     * main-sidebar sidebar-dark-primary elevation-4
     */

    "sidebar_class" => "shadow-right sidenav-light",



    'livewire' => false,




    ];

function access_path_js()
{
    return 'access/js/';
}

function access_path_css()
{
    return 'access/css/';
}
function access_path_img()
{
    return 'access/img/';
}

function views_path()
{
	return base_path( 'views/' );
}

function admin_path()
{
	return base_path( 'admin/' );
}



