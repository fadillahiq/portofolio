<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->string('type');
            $table->string('genre');
            $table->string('duration');
            $table->string('link_480p_uptobox');
            $table->string('link_480p_acefile');
            $table->string('link_480p_googledrive');
            $table->string('link_720p_uptobox');
            $table->string('link_720p_acefile');
            $table->string('link_720p_googledrive');
            $table->string('link_1080p_uptobox');
            $table->string('link_1080p_acefile');
            $table->string('link_1080p_googledrive');
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
        Schema::dropIfExists('dashboards');
    }
}
