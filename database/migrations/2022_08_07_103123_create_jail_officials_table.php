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
        Schema::create('jail_officials', function (Blueprint $table) {
            $table->id();
            $table->string('prison')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('distance_km')->nullable();
            $table->string('name_of_official')->nullable();
            $table->string('department_designation')->nullable();
            $table->string('contact_no')->nullable();
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
        Schema::dropIfExists('jail_officials');
    }
};
