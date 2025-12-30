<?php

namespace StudioDevs\Toolbox\Updates;

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
        Schema::table('rainlab_blog_posts', function (Blueprint $table) {
            $table->boolean('is_archived')->default(false);
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('rainlab_blog_posts', function (Blueprint $table) {
            $table->dropColumn('is_archived');
        });
    }
};
