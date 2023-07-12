<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public function setVisitorAttribute($value)
    {
        $this->attributes['visitor'] = json_encode($value);
    }
}
