<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RationMonth extends Model
{
    use Notifiable;

    public $timestamps  = true;

    protected $fillable = [
        'name', 'month', 'year', 'status', 'created_at', 'updated_at',
    ];
}
