<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $table = 'master_barang';

    protected $fillable = [
        'id',
        'name',
        'satuan_id',
        'desc',
        'created_at',
        'updated_at'
    ];

    public $incrementing = false;
}
