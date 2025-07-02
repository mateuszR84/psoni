<?php namespace StudioDevs\Toolbox\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateSupportFormsTable Migration
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
        Schema::create('studiodevs_toolbox_support_forms', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('excerpt')->nullable();
            $table->string('program');
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('studiodevs_toolbox_support_forms');
    }
};
