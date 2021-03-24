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

class Page extends Model
{
    use HasFactory;

    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
    /**
     * @var string
     */
    protected $table = "pages";

    /**
     * @var string
     */
    protected $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'uri',
        'image',
        'title',
        'keywords',
        'description',
        'text',
        'show',
        'editor'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
