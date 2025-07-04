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
        Schema::table('studiodevs_toolbox_support_forms', function(Blueprint $table) {
            $table->timestamp('published_at')->nullable();
        });

        Schema::table('studiodevs_toolbox_projects', function(Blueprint $table) {
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('studiodevs_toolbox_support_forms', function(Blueprint $table) {
            $table->dropColumn('published_at');
        });

        Schema::table('studiodevs_toolbox_projects', function(Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
};
