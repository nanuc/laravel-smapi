<?php

namespace Nanuc\Smapi\Models;

use Illuminate\Database\Eloquent\Model;

class SmapiRequest extends Model
{
    protected $casts = [
        'response_body' => 'array',
        'data' => 'array',
    ];
}
