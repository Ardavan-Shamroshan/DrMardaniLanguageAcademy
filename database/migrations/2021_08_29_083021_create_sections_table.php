<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->nullable()->constrained('school_classes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('academy_section_id')->nullable()->constrained('academy_sections')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('section_name');
            $table->string('room_no');
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
        Schema::dropIfExists('sections');
    }
}
