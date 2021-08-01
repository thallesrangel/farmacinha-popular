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
        'states',
        'city',
        'district',
        'address_place',
        'complement',
        'number',
        'flag_status'
    ];
}
