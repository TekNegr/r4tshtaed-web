<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description_fr', 'description_en', 'technologies', 'link', 'media_urls'];

    protected $casts = [
        'technologies' => 'array', // Si on stocke les technos en JSON
    ];

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'fr' ? $this->description_fr : $this->description_en;
    }

    public function setMediaUrlsAttribute($value)
    {
        $this->attributes['media_urls'] = is_array($value) ? json_encode($value) : $value;
    }
    // Surcharge la fonction getMediaUrlsAttribute pour forcer un tableau en sortie
    public function getMediaUrlsAttribute($value)
    {
        return is_string($value) ? json_decode($value, true) : $value;
    }
}
