<?php

namespace App\Models;

use App\Models\Enum\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * @property int $id
 *
 * @property string $alias
 * @property string $status
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CategoriesI18n $translations
 * @property CategoriesI18n $translation
 */
class Categories extends Model
{
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'alias',
        'views',
        'image',
        'status',
        'translation',
        'created_at',
        'updated_at',
    ];

    protected $with = ['translations', 'translation'];

    public function translations()
    {
        return $this->hasMany('App\Models\CategoriesI18n', 'category_id');
    }

    public function translation()
    {
        return $this->hasOne('App\Models\CategoriesI18n', 'category_id')->where('language', App::getLocale());
    }
}
