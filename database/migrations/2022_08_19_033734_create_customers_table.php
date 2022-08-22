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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('sex');
            $table->integer('custommer-id');
            $table->string('phone')->nullable();
            $table->string('phonezalo')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('position')->nullable();
            $table->string('unit')->nullable();
            $table->string('tax-code')->nullable();
            $table->string('invoice address')->nullable();
            $table->string('bank-account')->nullable();
            $table->string('customer-type')->nullable();
            $table->string('description-debt')->nullable();
            $table->string('debt-term')->nullable();
            $table->string('allowable-debt-description')->nullable();
            $table->string('customer-notes')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
