<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $table = 'film';

    protected $primaryKey = 'film_id';

    public $timestamps = false;

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actor');
    }
}