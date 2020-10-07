<?php

namespace App\Models;

use App\Models\Enum\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

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
 * @property RecordsI18n $translation
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

    protected $with = ['translations'];

    public function translations()
    {
        return $this->hasMany('App\Models\RecordsI18n', 'record_id')->where('language', App::getLocale());
    }
}
