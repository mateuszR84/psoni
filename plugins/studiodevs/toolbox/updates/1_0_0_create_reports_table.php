<?php namespace Studiodevs\Toolbox\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateReportsTable Migration
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
        Schema::create('studiodevs_toolbox_reports', function(Blueprint $table) {
            $table->id();
            $table->text('year');
            $table->text('financial');
            $table->text('substantive');
            $table->json('additional_fields')->nullable();
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('studiodevs_toolbox_reports');
    }
};
