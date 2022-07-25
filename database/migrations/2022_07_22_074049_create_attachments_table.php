<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('uuid', 36)->nullable();
            $table->string('attachable_type', 255)->nullable();
            $table->bigInteger('attachable_id')->length(20)->unsigned();
            $table->string('file_path', 255)->default();
            $table->string('extension', 255)->default();
            $table->string('mime_type', 255)->default();
            $table->integer('size')->length(10)->unsigned()->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
};
