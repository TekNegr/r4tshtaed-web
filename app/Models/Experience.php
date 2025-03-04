<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['title', 'company', 'start_date', 'end_date', 'description_fr', 'description_en'];

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'fr' ? $this->description_fr : $this->description_en;
    }
}
