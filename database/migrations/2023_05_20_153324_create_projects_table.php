<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique();
            $table->text('description');
            $table->string('url')->unique();
            $table->string('status', 20);
            $table->set('tags', ['web app', 'front-end', 'back-end']);
            $table->date('release_date')->nullable();
            $table->set('languages', ['html', 'css', 'bootstrap', 'scss', 'javascript', 'vuejs', 'php', 'laravel']);
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
        Schema::dropIfExists('projects');
    }
};
