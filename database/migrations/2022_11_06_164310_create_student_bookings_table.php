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
        Schema::create('student_bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('student_id');  
            $table->string('room_id'); 
            $table->string('status');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('is_paid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_bookings');
    }
};
