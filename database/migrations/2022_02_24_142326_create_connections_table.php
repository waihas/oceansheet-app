<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('token');
            // $table->foreignId('from_sheet_file_id')->references('id')->on('sheet_files')->constrained();
            // $table->foreignId('to_sheet_file_id')->references('id')->on('sheet_files')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('count_updates')->default(0);
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
        Schema::dropIfExists('connections');
    }
}
