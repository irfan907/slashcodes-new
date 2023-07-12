<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Calculatedquote extends Model
{
    protected $table='calculatedquotes';
    protected $fillable=[
        'type_of_website',
        'no_of_pages',
        'per_page_cost',
        'want_us_to_provide_content',
        'want_us_to_provide_images',
        'live_chat',
        'newsletter',
        'blog',
        'gallery',
        'social_media',
        'portfolio',
        'domain_name',
        'yearly_hosting',
        'speed_optimization',
        'custom_email',
        'advanced_seo',
        'extra_details',
        'start_date',
        'total',
        'visitor'
    ];

    public function setVisitorAttribute($value)
    {
        $this->attributes['visitor'] = json_encode($value);
    }
}
