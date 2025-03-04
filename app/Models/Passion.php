<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passion extends Model
{
    protected $fillable = ['name', 'description_fr', 'description_en'];

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'fr' ? $this->description_fr : $this->description_en;
    }
}
