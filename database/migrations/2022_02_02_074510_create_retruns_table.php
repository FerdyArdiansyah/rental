<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retruns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_pengembalian');
            $table->unsignedInteger('nofaktur_id');
            $table->unsignedInteger('kode_id');
            $table->unsignedInteger('namapeminjam_id');
            $table->unsignedInteger('tanggalpinjam_id');
            $table->unsignedInteger('tanggalkembali_id');
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
        Schema::dropIfExists('retruns');
    }
}
