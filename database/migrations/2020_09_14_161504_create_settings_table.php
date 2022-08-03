<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->Increments('id');
            $table->enum('theme', ['p', 'b','c','g', 'o', 'bh', 'r'])->default('c');
            $table->enum('font', ['n', 'u','r','i'])->default('n');
            $table->enum('data_theme', ['l', 'd','hc'])->default('l');
            $table->enum('mode_type', ['Y','N'])->default('N');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
