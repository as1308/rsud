<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDokterr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dokterr', function (Blueprint $table) {
            $table->id();
            $table->string('kodedokter',10);
            $table->string('namadokter',100);
            $table->date('tgllahir');
            $table->enum('jeniskelamin', ['l', 'p']);
            $table->string('alamat',100);
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
        Schema::dropIfExists('table_dokterr');
    }
}
