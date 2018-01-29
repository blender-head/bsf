<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt')->nullable();
            $table->longText('content');
            $table->string('image_normal')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->char('status',1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

            $table->index('title');
            $table->index('slug');
            $table->index('status');
            $table->index('created_by');
            $table->index('updated_by');
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
