<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterSatuan extends Model
{
    protected $table = 'master_satuan';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'created_at',
        'updated_at'
    ];

    public $incrementing = false;
}
