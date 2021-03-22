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

namespace App\Http\Controllers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @var string
     */
    protected $theme = 'default';

    /**
     * @var array settings
     */
    protected $settings = array();

    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(\Illuminate\Validation\Validator $validator)
    {
        return $validator->errors()->all();
    }


    /**
     * Controller constructor.
     */
    public function __construct()
    {

        foreach (Setting::all() as $set) {
            $this->setSettings($set);
        }
    }

    /**
     * @param $name
     *
     * @return false|mixed
     */
    public function __get( $name )
    {
        if ( isset( $name ) ) {
            return $this->settings[ $name ];
        }else{
            return false;
        }
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->settings['set_theme'];
    }

    /**
     * @param array $settings
     */
    public function setSettings(  $settings ): void
    {
        $this->settings[$settings['key']] = $settings['value'];
    }

    /**
     * День недели по-русски
     * @return string
     */
    public function getDayRus()
    {
        $days = array(
            'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
            'Четверг', 'Пятница', 'Суббота'
        );
        return $days[(date('w'))];
    }

    /**
     * Дата по-русски
     * @return string
     */
    public function getDateRus(){
        $monthes = array(
            1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
            5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
            9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        );
        return ( (int)Carbon::now('Europe/Moscow')->format( 'd' )
                 . ' ' . $monthes[(Carbon::now('Europe/Moscow')->format( 'n' ))]
                 . ' ' . Carbon::now('Europe/Moscow')->format( 'Y' ));
    }


}
