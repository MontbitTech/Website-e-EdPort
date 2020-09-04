<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'name',  'email', 'mobileno', 'entity', 'institutionname', 'city', 'state', 'status'
    ];
    public function city()
    {
        return $this->belongsToMany(City::class, 'city', 'id');
    }
    public function state()
    {
        return $this->belongsToMany(State::class, 'state', 'id');
    }
}
