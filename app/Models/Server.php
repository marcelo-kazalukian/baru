<?php

namespace App\Models;

use App\Enums\ServerStages;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'stage' => ServerStages::class,
    ];
}
