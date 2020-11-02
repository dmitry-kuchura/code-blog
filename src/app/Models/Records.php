<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * @property int $id
 *
 * @property string $alias
 * @property int $views
 * @property string $image
 * @property int $status
 * @property int $category_id
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RecordsI18n $translations
 * @property RecordsI18n $translation
 *
 * @property Categories $category
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
        'category_id',
        'created_at',
        'updated_at',
    ];

    protected $with = ['translations', 'translation', 'category'];

    public function category()
    {
        return $this->hasOne('App\Models\Categories', 'id', 'category_id');
    }

    public function translations()
    {
        return $this->hasMany('App\Models\RecordsI18n', 'record_id');
    }

    public function translation()
    {
        return $this->hasOne('App\Models\RecordsI18n', 'record_id')->where('language', App::getLocale());
    }
}
