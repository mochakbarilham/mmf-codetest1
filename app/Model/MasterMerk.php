<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterMerk extends Model
{
    protected $table = 'master_merk';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'created_at',
        'updated_at'
    ];

    public $incrementing = false;
}
