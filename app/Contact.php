<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'name',  'email', 'mobileno', 'entity', 'institutionname', 'city', 'state', 'status'
    ];
    public function getcity()
    {
        return $this->belongsTo(City::class, 'city', 'id');
    }
    public function getstate()
    {
        return $this->belongsTo(State::class, 'state', 'id');
    }
}
