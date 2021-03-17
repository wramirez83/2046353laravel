<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')
            ->references('id')
            ->on('programs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('instructor_id')
            ->references('id')
            ->on('instructors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('number');
            $table->date('date_in');
            $table->date('date_finish');
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
        Schema::dropIfExists('groups');
    }
}
