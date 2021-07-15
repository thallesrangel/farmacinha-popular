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
        'states',
        'role',
        'email',
        'professional_record',
        'flag_deleted'
    ];

    protected $hidden = [
        'password'
    ];
}
