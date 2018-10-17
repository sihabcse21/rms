<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RationConfiguration extends Model
{
    use Notifiable;

    public $timestamps  = true;

    protected $fillable = [
        'user_id', 'designation_id', 'ration_month_id', 'payment_amount', 'is_paid', 'status', 'created_at', 'updated_at',
    ];

    public function users() {
        return $this->belongsTo(User::class,'user_id','id')->withDefault(User::class);
    }

    public function ration_months() {
        return $this->belongsTo(RationMonth::class,'ration_month_id','id')->withDefault(RationMonth::class);
    }

    public function ration_details() {
        return $this->hasMany(RationConfigDetail::class, 'config_id');
    }
}
