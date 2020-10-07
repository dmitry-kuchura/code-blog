<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property int $category_id
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $language
 *
 * @property string $created_at
 * @property string $updated_at
 */
class CategoriesI18n extends Model
{
    protected $table = 'categories_i18n';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'text',
        'h1',
        'title',
        'description',
        'keywords',
        'language',
        'created_at',
        'updated_at',
    ];
}
