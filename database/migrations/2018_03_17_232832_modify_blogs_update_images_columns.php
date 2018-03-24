<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyBlogsUpdateImagesColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("ALTER TABLE `blogs` CHANGE COLUMN `image_normal` `filename` VARCHAR(255) NOT NULL");
        \DB::statement("ALTER TABLE `blogs` CHANGE COLUMN `image_thumbnail` `filepath` VARCHAR(255) NOT NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("ALTER TABLE `blogs` CHANGE COLUMN `filename` `image_normal` VARCHAR(255) NOT NULL");
        \DB::statement("ALTER TABLE `blogs` CHANGE COLUMN `filepath` `image_thumbnail` VARCHAR(255) NOT NULL");
    }
}
