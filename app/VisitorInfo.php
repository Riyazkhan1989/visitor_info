<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorInfo extends Model
{
    protected $fillable = [
        'visitor_name', 'address', 'vehicle_no', 'vehicle_type', 'travel_route', 'reason', 'departure_date', 'return_date', 'visitors_detail',
    ];
}
