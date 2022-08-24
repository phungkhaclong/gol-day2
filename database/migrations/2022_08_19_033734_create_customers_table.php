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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('customer_id')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('position')->nullable();
            $table->string('unit')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('invoice_address')->nullable();
            $table->integer('bank_account')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('accounting_rights')->default(0)->nullable();
            $table->string('key_order')->default(0)->nullable();
            $table->text('description_debt')->nullable();
            $table->string('debt_term')->nullable();
            $table->text('allowable_debt_description')->nullable();
            $table->text('customer_notes')->nullable();
            $table->string('user_created')->nullable();
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
