<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property string $alias
 * @property int $views
 * @property string $image
 * @property int $status
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RecordsI18n $translations
 */
class Records extends Model
{
    protected $table = 'records';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'alias',
        'views',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];

    public function translations()
    {
        return $this->hasOne('App\Models\RecordsI18n', 'record_id');
    }
}
