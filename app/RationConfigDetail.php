<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RationConfigDetail extends Model
{
    use Notifiable;

    public $timestamps  = true;

    protected $fillable = [
        'config_id', 'sku_id', 'created_at', 'updated_at',
    ];

    public function configs() {
        return $this->belongsTo(RationConfiguration::class,'config_id','id')->withDefault(RationConfiguration::class);
    }

    public function skus() {
        return $this->belongsTo(Sku::class,'sku_id','id')->withDefault(Sku::class);
    }

}
