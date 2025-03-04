<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['title', 'institution', 'year', 'description_fr', 'description_en', 'current'];

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'fr' ? $this->description_fr : $this->description_en;
    }

}
