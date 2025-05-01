<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotationLogsTable extends Migration
{
    public function up()
    {
        Schema::create('rotation_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->string('from_email');
            $table->string('to_email');
            $table->boolean('threaded')->default(false);
            $table->timestamp('sent_at');
            $table->timestamps();

            $table->foreign('campaign_id')->references('id')->on('campaigns');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rotation_logs');
    }
}