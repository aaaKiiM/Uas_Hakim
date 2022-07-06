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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->string('nama_toko');
            $table->string('alamat_toko');
            $table->string('no_hp_toko');
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
        Schema::dropIfExists('tokos');
    }
};
