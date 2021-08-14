<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Role extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
