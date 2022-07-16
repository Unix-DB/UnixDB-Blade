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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->integer('user_id');
            $table->longText('image_url');

            $table->text('distribution_id');
            $table->text('kernel_id');
            $table->text('terminal_id');
            $table->text('editor_id');
            $table->text('shell_id');
            $table->text('resolution_id');
            $table->text('cpu_id');
            $table->text('ram_id');
            $table->text('gpu_id');

            $table->text('repository');

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
        Schema::dropIfExists('posts');
    }
};
