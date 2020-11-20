<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeriksa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_periksa', function (Blueprint $table) {
            
            $table->string('nopasien',10);
            $table->string('kodedokter',10);
            $table->string('kodepenyakit',10);
            $table->string('kodepegawai',10);
            $table->string('kodeobat',10);
            $table->date('tglperiksa');
            $table->string('biayadokter',50);
            $table->string('biayadaftar',50);
            $table->string('total',100);
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
        Schema::dropIfExists('table_periksa');
    }
}
