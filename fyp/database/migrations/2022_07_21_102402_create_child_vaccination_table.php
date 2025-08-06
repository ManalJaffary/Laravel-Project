<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_vaccination', function (Blueprint $table) {
            $table->id();
            $table->integer('vaccine_id');
            $table->integer('child_id');
            $table->integer('vaccinator_id');
            $table->integer('vaccine_date');
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
        Schema::dropIfExists('child_vaccination');
    }
};
