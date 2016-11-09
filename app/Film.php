<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use Searchable;

    public $table = 'film';

    protected $primaryKey = 'film_id';

    public $timestamps = false;

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actor');
    }

    public function toSearchableArray()
    {
        return [
            'film_id' => $this->film_id,
            'title' => $this->title,
            'description' => $this->description,
            'actors' => $this->actors->implode('name', ', '),
            'release_year' => $this->release_year,
        ];
    }
}
