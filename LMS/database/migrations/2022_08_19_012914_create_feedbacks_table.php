<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 0c72dba (modify migeration)
            $table->strings('course_id');
            $table->strings('batch_id');
            $table->strings('staff_id');
            $table->strings('student_id');
            $table->strings('tite');
            $table->strings('rating');
            $table->strings('review');
            $table->strings('is_active');
            
             
=======
>>>>>>> parent of 9ca842c (add new  and relaions DB)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
}
