<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Quote extends Model
{
    protected $fillable=['name','email','phone','company','budget','comments','source','page_source','visitor'];

    public function setVisitorAttribute($value)
    {
        $this->attributes['visitor'] = json_encode($value);
    }
}
