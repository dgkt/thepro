<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SaveCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_commentsssss', function (Blueprint $table) {
            $table->id();
            $table->string('reactions');
            // $table->date('date');
            // $table->string('comment');
            // $table->string('author');
            // $table->string('group');
            // $table->string('title');
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
        Schema::dropIfExists('my_commentsssss');
    }
}
