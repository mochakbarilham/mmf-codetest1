<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SingleInvoice extends Model
{
    protected $table = 'single_invoice';

    protected $fillable = [
        'id',
        'barang_id',
        'merk_id',
        'satuan_id',
        'jumlah',
        'batch_number',
        'delivery_time',
        'created_at',
        'updated_at'
    ];

    public $incrementing = false;
}
