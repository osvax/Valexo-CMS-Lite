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

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummaryStatistic extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * Определяет необходимость отметок времени для модели.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */

    protected $table = "summary_statistic";


    /**
     * @var string[]
     */
    protected $fillable = [
        'visitors',
        'hosts',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'today',
    ];
}
