<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;

    protected $table = 'employees';
    protected $primaryKey = 'id_employees';
    protected $fillable = [
        'id_employees','id_jobs','name','email','phone','address',
    ];

    public function jobs()
    {
        return $this->belongsTo('App\Jobs','id_jobs');
    }
}
