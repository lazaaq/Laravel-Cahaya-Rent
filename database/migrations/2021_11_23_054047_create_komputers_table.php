<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komputers', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 255);
            $table->string('merk', 50);
            $table->string('cpu', 50);
            $table->string('gpu', 50);
            $table->string('ram', 50);
            $table->string('storage', 50);
            $table->string('os', 50);
            $table->text('deskripsi');
            $table->string('harga', 100);
            $table->integer('jml_unit');
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
        Schema::dropIfExists('komputers');
    }
}
