<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';

    protected $primaryKey = 'actor_id';

    public $timestamps = false;

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
