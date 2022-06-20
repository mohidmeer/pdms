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
            $table->string('gender')->nullable();
            $table->string('iqama_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('cnic')->nullable();
            $table->string('hijri_detention_date')->nullable();
            $table->date('gregorian_detention_date')->nullable();
            $table->string('detention_authority')->nullable();
            $table->string('detention_city')->nullable();
            $table->string('prison_status')->nullable();
            $table->string('case_details')->nullable();
            $table->string('prison')->nullable();
            $table->string('prisoner_number')->nullable();
            $table->string('pakistan_city')->nullable();
            $table->string('detention_period')->nullable();
            $table->decimal('private_rights_haq_e_khas',14,2)->nullable();
            $table->date('expected_release_date_status')->nullable();
            $table->date('etd_date')->nullable();

            $table->string('actual_release_date_hijri')->nullable();
            $table->date('actual_release_date_gregorian')->nullable();
            $table->string('attachment')->nullable();
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
