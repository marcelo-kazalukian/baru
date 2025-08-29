<?php

namespace App\Models;

use App\Enums\ServerStages;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'stage' => ServerStages::class,
    ];

    public function processes(): BelongsToMany
    {
        return $this->belongsToMany(Process::class)->withPivot(['location']);
    }    
}
