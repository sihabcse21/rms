<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sku extends Model
{
    use Notifiable;

    public $timestamps  = true;

    protected $fillable = [
        'name', 'weight', 'status', 'created_at', 'updated_at',
    ];
}
