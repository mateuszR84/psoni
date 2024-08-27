<?php namespace StudioDevs\Gallery\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCategoriesTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('studiodevs_gallery_categories', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('studiodevs_gallery_galleries_categories', function($table)
        {
            $table->integer('gallery_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['gallery_id', 'category_id']);
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('studiodevs_gallery_categories');
        Schema::dropIfExists('studiodevs_gallery_galleries_categories');
    }
};
