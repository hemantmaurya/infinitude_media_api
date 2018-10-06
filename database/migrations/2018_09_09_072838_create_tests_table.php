<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visit_id');
            $table->integer('client_id');
            $table->string('status');
            $table->timestamp('last_update');
            $table->string('country');
            $table->double('balance');
            $table->string('currency');
            $table->string('custom_refer');
            $table->string('has_ftd');
            $table->string('campaign_keyword');
            $table->string('ftd_date')->nullable();
            $table->string('lead_status');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('phone');
            $table->timestamp('reg_time')->nullable();
            $table->integer('campaignId');
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
        Schema::dropIfExists('tests');
    }
}
