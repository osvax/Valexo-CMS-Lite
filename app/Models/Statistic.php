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

/**
 * App\Models\Statistic
 *
 * @property int $id
 * @property string|null $created_at
 * @property string $ip
 * @property string $city
 * @property string $region
 * @property string $country
 * @property string $platform
 * @property string $browser
 * @property string $device_type
 * @property string $useragent
 * @property int $visitor
 * @property int|null $host
 * @property string $request_url
 * @property string $http_referer
 * @method static \Database\Factories\StatisticFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereBrowser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereDeviceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereHttpReferer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereRequestUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereUseragent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statistic whereVisitor($value)
 * @mixin \Eloquent
 */
class Statistic extends Model
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
    protected $table = "statistics";
    /**
     * ip
     * city
     * region
     * country
     * platform
     * browser
     * device_type
     * useragent
     * visitor
     * host
     * request_url
     * http_referer
     * @var string[]
     */
    protected $fillable = [
        'ip',
        'city',
        'region',
        'country',
        'platform',
        'browser',
        'device_type',
        'useragent',
        'visitor',
        'host',
        'request_url',
        'http_referer',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created' => 'created_at',
    ];
}
