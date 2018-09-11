<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspiciousLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspicio_lists', function(Blueprint $table) {
            $table->increments('id');
            $table->string('source', 255);
            $table->string('title', 255);
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');
        });

        Schema::create('suspicio_entities', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('suspicio_list_id');
            $table->string('name', 255);
            $table->string('address', 255)->nullable();
            $table->string('websites', 512)->nullable();
            $table->date('date_listed');
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');

            $table->index('name');
            $table->index('websites');

            $table->foreign('suspicio_list_id')
                ->references('id')->on('suspicio_lists')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suspicio_entities');
        Schema::dropIfExists('suspicio_lists');
    }
}
