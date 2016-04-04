<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang', 255)->nullable();
            $table->date('tanggal');
            $table->integer('jumlah')->default(0);
            $table->integer('harga')->default(0);
            $table->integer('total')->default(0);
            $table->string('kondisi', 30)->nullable();
            $table->string('keterangan', 500)->nullable();
            $table->string('slug')->default('');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
       Schema::drop('barang');
    }
}
