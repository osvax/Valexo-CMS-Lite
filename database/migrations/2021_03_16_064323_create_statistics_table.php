<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('created_at');
            $table->ipAddress('ip');
            $table->string( 'city' );
            $table->string( 'region' );
            $table->string( 'country' );
            $table->string( 'platform' );
            $table->string( 'browser' );
            $table->string( 'device_type' );
            $table->string( 'useragent' );
            $table->integer( 'visitor' );
            $table->integer( 'host' );
            $table->string( 'request_url' );
            $table->string( 'http_referer' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
}
