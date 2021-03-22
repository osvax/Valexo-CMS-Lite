<?php

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
