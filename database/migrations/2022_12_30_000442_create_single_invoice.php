<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_invoice', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('barang_id');
            $table->string('merk_id');
            $table->string('satuan_id');
            $table->unsignedBigInteger('jumlah');
            $table->string('batch_number');
            $table->datetime('delivery_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('single_invoice');
    }
}
