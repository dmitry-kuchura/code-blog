<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property int $record_id
 * @property string $name
 * @property string $text
 * @property string $h1
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $language
 *
 * @property string $created_at
 * @property string $updated_at
 */
class PagesI18n extends Model
{
    protected $table = 'pages_i18n';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'record_id',
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
