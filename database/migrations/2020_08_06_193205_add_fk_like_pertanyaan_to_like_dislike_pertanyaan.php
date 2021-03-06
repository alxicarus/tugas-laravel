<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkLikePertanyaanToLikeDislikePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id')->unsigned();
                $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
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
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->dropForeign(['pertanyaan_id','profil_id']);
            $table->dropColumn(['pertanyaan_id','profil_id']);
        });
    }
}
