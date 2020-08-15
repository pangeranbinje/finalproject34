<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdJawabans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawabans', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id')->nullable();

            $table->foreign('pertanyaan_id')->references('id')->on('profiles');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawabans', function (Blueprint $table) {
            $table->dropForeign(['pertanyaan_id']);
            $table->dropColumn(['pertanyaan_id']);

        });//
    }
}
