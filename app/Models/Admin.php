<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Admin extends Model
{
    protected $guarded = [];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}
