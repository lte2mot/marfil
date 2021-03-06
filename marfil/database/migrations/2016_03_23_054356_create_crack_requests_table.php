<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrackRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crack_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->macAddress('bssid');
            $table->text('password')->nullable();
            $table->boolean('finished');
            $table->datetime('created_at');

            $table->index('finished');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('crack_requests');
    }
}
