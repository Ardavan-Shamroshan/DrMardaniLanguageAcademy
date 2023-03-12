<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('exam_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('exams')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('session_id')->constrained('school_sessions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('total_marks');
            $table->float('pass_marks');
            $table->text('marks_distribution_note');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('exam_rules');
    }
}
