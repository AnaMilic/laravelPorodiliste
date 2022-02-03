<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucDoktor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doktors', function (Blueprint $table) {
            $table->after('iskustvo', function ($table) {
                $table->foreignId('porodiliste_id')->constrained('porodilistes');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doktors', function (Blueprint $table) {
            $table->dropColumn('porodiliste_id');
        });
    }
}
