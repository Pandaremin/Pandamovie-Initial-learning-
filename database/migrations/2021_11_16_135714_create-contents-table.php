<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('poster');
            $table->text('download1');
            $table->text('download2');
            $table->text('info');
            $table->text('rating');
            $table->text('releasedate');
            $table->text('duration');
            $table->text('trailer');
            $table->text('genre1');
            $table->text('genre2');
            $table->text('genre3');
            $table->text('agerestriction');
            $table->text('sub');
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
        Schema::dropIfExists('contents');
    }
}
