<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_obat')->unsigned();
            $table->string('jumlah_beli')->nullable();
            $table->integer('harga')->unsigned();
            $table->integer('total')->unsigned();

// fk author_id
            $table->foreign('id_user')->references('id')
                ->on('users')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_obat')->references('id')
                ->on('obats')->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('transaksis');
    }
}
