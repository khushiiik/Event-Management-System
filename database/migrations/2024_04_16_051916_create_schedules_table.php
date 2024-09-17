<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vid');
            $table->foreign('id')->references('id')->on('users');
            // $table->unsignedBigInteger('cid');
            // $table->foreign('cid')->references('cid')->on('customers');
            // $table->unsignedBigInteger('bid');
            // $table->foreign('bid')->references('bid')->on('bookevents');
            $table->string('event_name');
            $table->date('s_date');
            $table->time('s_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
