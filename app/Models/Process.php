<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Process extends Model
{
    protected $guarded = [];

    public function servers(): BelongsToMany
    {
        return $this->belongsToMany(Server::class)->withPivot(['location']);
    }
}
