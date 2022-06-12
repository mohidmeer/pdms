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
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('iqama_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('hijri_detention_date')->nullable();
            $table->string('gregorian_detention_date')->nullable();
            $table->string('detention_authority')->nullable();
            $table->string('detention_city')->nullable();
            $table->string('prison_status')->nullable();
            $table->string('charges_crime')->nullable();
            $table->string('case_details')->nullable();
            $table->string('prison')->nullable();
            $table->string('prisoner_number')->nullable();
            $table->string('pakistan_city')->nullable();
            $table->string('detention_period')->nullable();
            $table->string('private_rights_haq_e_khas')->nullable();
            $table->string('expected_release_date_status')->nullable();
            $table->string('etd_date')->nullable();
            $table->string('shifted_to_other_department')->nullable();
            $table->string('shifting_date_gregorian')->nullable();
            $table->string('actual_release_date_hijri')->nullable();
            $table->string('actual_release_date_gregorian')->nullable();
            $table->string('prisoner_status')->nullable();
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
        Schema::dropIfExists('prisoners');
    }
};
