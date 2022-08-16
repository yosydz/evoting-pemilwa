<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();;
            $table->string('nama_ketua');
            $table->string('tentang_ketua');
            $table->string('foto_ketua');
            $table->string('nama_wakil');
            $table->string('tentang_wakil');
            $table->string('foto_wakil');
            $table->string('visi');
            $table->string('misi');
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
        Schema::dropIfExists('kandidat');
    }
}
