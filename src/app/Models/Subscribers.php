<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 *
 * @property string $hash
 * @property string $email
 * @property string $status
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RecordsI18n $translations
 */
class Subscribers extends Model
{
    protected $table = 'subscribers';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'hash',
        'email',
        'status',
        'created_at',
        'updated_at',
    ];
}
