<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGametypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_types', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('parent_id');
            $table->integer('level');
            $table->integer('position');
            $table->string('summary', 1000);
            $table->text('description');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('meta_image');
            $table->string('limited')->default(PAGINATE_BOX);
            $table->string('sort_by')->default('start_date');
            $table->integer('home')->default(ACTIVE);
            $table->integer('type')->default(ACTIVE);
            $table->integer('grid')->default(ACTIVE);
            $table->integer('status')->default(ACTIVE);
            $table->string('lang')->default(VI);
            $table->timestamps();
            $table->index('slug', 'game_types_slug_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_types');
    }
}
