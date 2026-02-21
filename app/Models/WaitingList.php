<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    protected $fillable = [
        'email',
        'name',
        'platform',
        'locale',
        'source',
    ];

    protected function casts(): array
    {
        return [
            'notified_at' => 'datetime',
        ];
    }
}
