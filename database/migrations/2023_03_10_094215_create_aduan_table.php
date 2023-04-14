<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('namabarang');
            $table->integer('kategori_id');
            $table->string('deskripsi');
            $table->date('tglketinggalan');
            $table->string('stasiun_id');
            $table->string('area_id');
            $table->string('keteranganlain');
            $table->string('foto');
            $table->string('status')->default('0');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_accounts');
    }
};
