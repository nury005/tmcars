<?php

namespace App\Models;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property  name
 * @property  name_en
 * @property  name_ru
 * @property mixed name_ru
 * @property mixed name_en
 * @property mixed name
 */
class Color extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }


    public function getName()
    {
        $locale = app()->getLocale();
        if ($locale == 'tm') {
            return $this->name;
        }

        elseif ($locale == 'ru') {
            return $this->name_ru ?: $this->name;
        }

        elseif ($locale == 'en') {
            return $this->name_en ?: $this->name;
        } else {
            return $this->name;
        }
    }
}
