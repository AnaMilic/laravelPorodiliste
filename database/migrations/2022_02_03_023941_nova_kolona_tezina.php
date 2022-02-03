<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaTezina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bebas', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->integer('tezina');
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
        Schema::table('bebas', function (Blueprint $table) {
            $table->dropColumn('tezina');
        });
    }
}
