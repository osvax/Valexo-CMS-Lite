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
 * App\Models\Callback
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $surname
 * @property string $phone
 * @property string|null $email
 * @property int $status
 * @property string $ip
 * @property string $order_page
 * @property string $text
 * @method static \Database\Factories\CallbackFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereOrderPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Callback extends Model
{
    use HasFactory;
}
