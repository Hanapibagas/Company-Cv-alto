<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_careers', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('alamat_ktp');
            $table->string('pendidikan');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('pas_foto');
            $table->string('ijaza');
            $table->string('ktp');
            $table->string('cv');
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
        Schema::dropIfExists('form_careers');
    }
}
