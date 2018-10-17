<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps  = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'ration_id', 'brash_no', 'police_id_no', 'nid', 'group', 'father_name',
        'mother_name', 'designation_id', 'designation_name', 'address', 'organization_name', 'unit_name', 'division',
        'working_area', 'previous_working_area', 'family_member', 'mobile_no', 'user_pic', 'date_of_joining', 'date_of_leave',
        'status', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
