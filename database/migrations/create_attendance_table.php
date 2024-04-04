<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('workday')->useCurrent();
            $table->timestamps();('work_start_time', $precision = 0)->nullable()->useCurrent();
            $table->Timestamp('work_end_time', $precision = 0)->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}