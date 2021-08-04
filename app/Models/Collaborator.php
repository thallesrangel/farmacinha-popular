<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'collaborator';

    protected $fillable = [
        'first_name',
        'last_name',
        'cpf',
        'birth_date',
        'state_id',
        'city_id',
        'role',
        'email',
        'professional_record',
        'flag_status'
    ];

    protected $hidden = [
        'password'
    ];

    public function states()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
