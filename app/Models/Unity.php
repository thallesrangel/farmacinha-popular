<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'unity';

    protected $fillable = [
        'corporate_name',
        'cnes',
        'state_id',
        'city_id'
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
