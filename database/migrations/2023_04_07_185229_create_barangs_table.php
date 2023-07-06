<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_barang_id');
            $table->integer('room_id')->nullable();
            $table->boolean('barang_ruang')->default(false);
            $table->string('custom_name')->nullable();
            $table->string('condition');
            $table->string('bidding_year');
            $table->string('urutan_barang');
            $table->string('item_code')->default(false);
            $table->string('pinjam')->default(false);
            $table->string('ruang_pinjam')->default(false);
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
        Schema::dropIfExists('barangs');
    }
}
