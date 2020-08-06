<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkLikeJawabanToLikeDislikeJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id')->unsigned();
                $table->foreign('jawaban_id')->references('id')->on('jawaban');
            $table->unsignedBigInteger('profil_id')->unsigned();
                $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->dropForeign(['jawaban_id','profil_id']);
            $table->dropColumn(['jawaban_id','profil_id']);
        });
    }
}
