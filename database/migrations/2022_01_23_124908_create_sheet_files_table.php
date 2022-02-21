<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet_files', function (Blueprint $table) {
            $table->id();
            $table->string('spreadsheetId');
            $table->string('name');
            $table->string('mimeType')->nullable();
            $table->string('size')->nullable();
            $table->string('webViewLink')->nullable();
            $table->boolean('shared')->nullable();
            $table->boolean('ownedByMe')->nullable();
            $table->json('exportLinks')->nullable();
            $table->foreignId('sheet_id')->nullable()->constrained();
            $table->foreignId('sheet_range_id')->nullable()->constrained();
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
        Schema::dropIfExists('sheet_files');
    }
}
