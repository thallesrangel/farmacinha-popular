<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'people';

    protected $fillable = [
        'first_name',
        'last_name',
        'social_name',
        'sex',
        'birth_date',
        'cpf',
        'sus',
        'state_id',
        'city_id',
        'district',
        'address_place',
        'complement',
        'number',
        'flag_status'
    ];
}
