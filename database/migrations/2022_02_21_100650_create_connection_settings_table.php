<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('connection_id')->constrained();
            $table->foreignId('from_sheet_file_id')->constrained();
            $table->foreignId('to_sheet_file_id')->constrained();
            $table->string('time_run')->nullable();
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
        Schema::dropIfExists('connection_settings');
    }
}
